

<?php
try{
    $pdo=new PDO('mysql:dbname=gs_dev_last;charset=utf8;host=localhost','root','');
}catch (PDOExcaption $e){
    extit('DbConnectError:'.$e->getMessage());
}
$sql="INSERT INTO rank_db(id,name,logic,tool,talk,atti,sum)
    VALUES(NULL,:a1,:a2,:a3,:a4,:a5,:a6)";


$stmt = $pdo->prepare("SELECT * FROM rank_db");
$status = $stmt->execute();

$view ="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    while($result =$stmt->fetch(PDO::FETCH_ASSOC)){
        $view .='<p>';
        
        $view .=$result["name"];
        $view .='さん';
        $view .=' : ';
        $view .=$result["sum"];
        $view .='点';
        $view .='</p>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presen App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="panel">
        <div class=result>結果一覧</div>
        <hr>
        <div class="No1">
        </div>
        <div class="container jumbotron"><?=$view?></div>
    
    </div>
</body>
</html>