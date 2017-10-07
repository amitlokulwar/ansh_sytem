<?php
//echo "here";
echo "Arg:<pre>";
print_r($argv);

$temp = $argv[2];

$arr=explode(",",$temp);
function max_1000($var)
{
    // returns whether the input integer is less than 1000
	if($var<1000)
         return($var);
}

print_r(array_filter($arr, "max_1000"));
$arr=array_filter($arr, "max_1000");
echo array_sum($arr); 
//echo "Sum is : ".$sum;
