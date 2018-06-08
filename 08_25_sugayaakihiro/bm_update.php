<?php
//入力チェック(受信確認処理追加)
// var_dump($_POST);

if(
  !isset($_POST["id"]) || $_POST["id"]=="" ||
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["url"]) || $_POST["url"]=="" ||
  !isset($_POST["comment"]) || $_POST["comment"]==""
){
  exit('ParamError');
}


//1. POSTデータ取得
$id   = $_POST["id"];
$name   = $_POST["name"];
$url  = $_POST["url"];
$comment = $_POST["comment"];


//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成   *****エラーでないが更新されない****編集権限の問題では？
$update = $pdo->prepare("UPDATE gs_bm_table SET name=:name,url=:url,comment=:comment WHERE id=:id");
$update->bindValue(':name', $name, PDO::PARAM_STR);
$update->bindValue(':url', $url, PDO::PARAM_STR);
$update->bindValue(':comment',$comment, PDO::PARAM_STR);
$update->bindValue(':id', $id, PDO::PARAM_INT);
$status = $update->execute();

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
