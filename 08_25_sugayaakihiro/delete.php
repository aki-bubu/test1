<?php
// 入力チェック(受信確認処理追加)
// var_dump($_POST);
// if(
//   !isset($_POST["name"]) || $_POST["name"]=="" ||
//   !isset($_POST["url"]) || $_POST["url"]=="" ||
//   !isset($_POST["comment"]) || $_POST["comment"]==""

// ){
//   exit('ParamError');
// }

//1. POSTデータ取得
$id=$_GET["id"];


//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//削除処理
$delete = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$delete->bindValue(':id', $id, PDO::PARAM_INT);
$status = $delete->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $update->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．select.phpへリダイレクト
  header("Location: select.php");
  exit;
}
?>
