
<?php
try{
    $pdo=new PDO('mysql:dbname=gs_dev_last;charset=utf8;host=localhost','root','');
}catch (PDOExcaption $e){
    extit('DbConnectError:'.$e->getMessage());
}
$sql="INSERT INTO rank_db(id,name,logic,tool,talk,atti,sum)
    VALUES(NULL,:a1,:a2,:a3,:a4,:a5,:a6)";



$name=$_POST["name"];
$logic=$_POST["logic1"]
+$_POST["logic2"]
+$_POST["logic3"]
+$_POST["logic4"];

$tool=$_POST["tool1"]
+$_POST["tool2"]
+$_POST["tool3"]
+$_POST["tool4"];

$talk=$_POST["talk1"]
+$_POST["talk2"]
+$_POST["talk3"]
+$_POST["talk4"];

$atti=$_POST["atti1"]
+$_POST["atti2"]
+$_POST["atti3"];

$sum=$logic+$tool+$talk+$atti;


$stmt=$pdo->prepare($sql);
$stmt->bindValue(':a1',$name,PDO::PARAM_STR);
$stmt->bindValue(':a2',$logic,PDO::PARAM_STR);
$stmt->bindValue(':a3',$tool,PDO::PARAM_STR);
$stmt->bindValue(':a4',$talk,PDO::PARAM_STR);
$stmt->bindValue(':a5',$atti,PDO::PARAM_STR);
$stmt->bindValue(':a6',$sum,PDO::PARAM_STR);

$flag= $stmt->execute();

header("Location: index.php");
// array:



?>