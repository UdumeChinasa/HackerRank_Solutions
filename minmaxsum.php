<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    $total = array_sum($arr);
    // Write your code here
    $min = min($arr);
    $max = max($arr);
    
   $sum_min = $total - $min;
    $sum_max = $total - $max;
    echo $sum_max ." " , $sum_min;
}
$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

   miniMaxSum($arr);

   