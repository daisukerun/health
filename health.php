<?php
$name=$_POST("name");
echo("作業名:".$name."\n");
$sagyo_total=$_POST("zentai");
$sagyo_kanori=$_POST("tairyokujikann1");
$ge_tai=$_POST("tairyokujikann2");

$n=$ge_tai/100;
$sagyo_kanoge=$sagyo_kanori*$n;
echo("現実的な作業可能時間:".$sagyo_kanoge."\n");
$total=$sagyo_total/$sagyo_kanoge;
echo("作業終了見込み時間:".$total);

?>