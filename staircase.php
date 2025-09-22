<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
   
        
        for($i=1; $i <= $n; $i++){
              $spaceinbetween = " ";
        $hashtag = '#';
            echo str_repeat ($spaceinbetween, $n-$i), str_repeat($hashtag, $i) . "\n";
             }
    }
  $n = intval(trim(fgets(STDIN)));
staircase($n);
