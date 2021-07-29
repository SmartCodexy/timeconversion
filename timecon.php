<?php
$i_s = $_POST['number'];
$pusername = $_POST['user_name'];
$s_h = 3600;
$oneMIn = 60;

$hourInSec = intval($i_s/$s_h);
$product = $hourInSec * $s_h;

$rem_hr_sec = $i_s - $product;

$minInSec = intval($rem_hr_sec/$oneMIn);
$mproduct = $minInSec * $oneMIn;

$rem_min_sec = $rem_hr_sec - $mproduct;

echo $_POST['user_name']."<br> Thanks for trying out the conversion <br> it is a pleasure to have. <br><br><br>";
echo $_POST['number']."seconds <br> conversion to hours, minute and seconds is below";
echo "$hourInSec"."hours:";
echo "$minInSec"."minutes:";
echo "$rem_min_sec"."Seconds";
?>