<?php

function SolveMeFirst($a, $b){
    if ($a < 1 || $a > 1000 || $b < 1 || $b > 1000) {
        return "invalid number";
    }

    return $a + $b;

}
$a=intval(fgets(STDIN));
$b = intval(fgets(STDIN));

echo SolveMeFirst ($a , $b);

?>
