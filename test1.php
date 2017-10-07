<?php
//echo "here";
$temp = $argv[2];

$temp =trim($temp, "\n");

$arr=explode(",",$temp);

echo array_sum($arr); 
//echo "Sum is : ".$sum;
