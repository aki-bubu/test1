<?php
include "Chromephp.php";
    $name=$_GET["name"];
    $eva1=$_GET["eva1"];
    $eva2=$_GET["eva2"];
    $eva3=$_GET["eva3"];
    $eva4=$_GET["eva4"];
    $eva5=$_GET["eva5"];
    $eva6=$_GET["eva6"];
    $c=",";
    $str=$name."\n"."HTML".$c.$eva1.$c.$eva2.$c.$eva3.$c."\n"."Javascript".$c.$eva4.$c.$eva5.$c.$eva6."\n";
      
    // ファイルを書き込み用に開きます。
      $f = fopen("../data/data.csv", "a");
      flock($f,LOCK_EX);
      fwrite($f,$str);
      flock($f,LOCK_UN);
      // ファイルを閉じます。
      fclose($f);
?>

<html>
<head>
<meta charset="utf-8">
<title>言語評価（受信）</title>
</head>
<body>
<p>HTML</p>
<p>かんたん:<?=$eva1?></p>
<p>見た目:<?=$eva2?></p>
<p>言葉にできない度:<?=$eva3?></p>

<p>Javascript</p>
<p>かんたん:<?=$eva4?></p>
<p>見た目:<?=$eva5?></p>
<p>言葉にできない度:<?=$eva6?></p>
<ul>
<li><a href="read.php">download</a></li>
</ul>
</body>
</html>
