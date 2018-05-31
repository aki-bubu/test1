
    <?php
    
    //ちゃんとデータが飛んできてない場合、アラートを出す
    if(
      !isset($_POST["name"]) || $_POST["name"]==""||//「!isset=issetされていない」という意味
      !isset($_POST["age"]) || $_POST["age"]==""||
      !isset($_POST["income"]) || $_POST["income"]==""||
      !isset($_POST["job"]) || $_POST["job"]==""||
      !isset($_POST["role"]) || $_POST["role"]==""
    ){
      exit("ParamError");
    }
    
    //1. POSTデータ取得
    //$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
    //$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
    $name =$_POST["name"];
    $age =$_POST["age"];
    $income = $_POST["income"];
    $job =$_POST["job"];
    $role =$_POST["role"];
    
    
    //2. DB接続します
    try {
      $pdo = new PDO('mysql:dbname=gs_an_db;charset=utf8;host=localhost','root','');//最後の二つは「ユーザー名」と「パスワード」の意味。localhostの場合は「ユーザー名=root」と「パスワード=""←なし」
    } catch (PDOException $e) {
      exit('dbError:'.$e->getMessage());
    }
    
    
    //３．データ登録SQL作成
    $sql="INSERT INTO gs_an_db(id,name,email,naiyou,indate)
    VALUES(NULL,:a1,:a2,:a3,:a4,:a5,sysdate())";//直接「"ジーズ太郎"」など入力するとハッキングされる可能性があるため変数を使う
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':a1', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':a2', $age,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':a3', $income, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':a4', $job, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':a5', $role,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $status = $stmt->execute();
    
    //４．データ登録処理後
    if($status==false){
      //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
      $error = $stmt->errorInfo();
      exit("sqlError:".$error[2]);
    }else{
      //５．index.phpへリダイレクト
     header("location: index.php");//「:」の後の半角スペースは必要。ないとエラー出る
    
    }
    ?>
    
//     $name=$_GET["name"];
//     $age=$_GET["age"];
    $income=$_POST["income"];
    // $friends=$_GET["friends"];
    // $job=$_GET["job"];
    // $role=$_GET["role"];
    // $skill=$_GET["skill"];

    // //起業した際の年収期待値200万＝1とする
    // $i=function(){
    //     if()
    // }
   
    function jud($income){
        if($income<=1){
         echo "会社を辞めて起業しろ！！";
        }else{
         echo "起業！？甘っちょろいこと言ってんじゃねぇ！！";   
        }
    }
        ?>
     


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>起業する？</title>
</head>
<body>
    <section>
    <h1>あなたの判定は、、、</h1>
    <div class="moguro"><img src="./img/07php_img1.jpg" alt="moguro"></div>
    <p class="judge"><?=jud()?></p>

 

    </section>
</body>
</html

