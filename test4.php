<?php
//echo "here";
echo "Arg:<pre>";
print_r($argv);

$temp = $argv[2];

$cano = preg_replace('#c_[^/]+/#', '', $temp);

echo "str " .$cano;
die();
$temp1 = str_replace("\r\n",'',$temp) ;
$temp1 = str_replace("n",',',$temp1) ;
$arr=explode(",",$temp1);

echo array_sum($arr); 
//echo "Sum is : ".$sum;
