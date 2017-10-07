<?php
//echo "here";
$temp = $argv[2];


$temp1 = str_replace("\r\n",'',$temp) ;
$temp1 = str_replace("n",',',$temp1) ;
$arr=explode(",",$temp1);

echo array_sum($arr); 
//echo "Sum is : ".$sum;
