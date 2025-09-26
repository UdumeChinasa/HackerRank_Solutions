<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    
    
    $n = count($arr);

    $positive = 0;
    $negative = 0;
    $zerovalues =0;
    
    for($i=0; $i < $n; $i++){
        if($arr[$i] > 0){
           $positive++;
        }
         elseif($arr[$i] < 0){bm
            $negative++;
         }
         else{
            $zerovalues++;
         }
    
    }
          printf("%.6f\n", $positive/$n);
    printf("%.6f\n", $negative/$n);
    printf("%.6f\n", $zerovalues/$n);
    
}
$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
    
   
plusMinus($arr);



