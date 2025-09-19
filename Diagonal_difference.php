<?php
function diagonalDifference($arr) {
    $n = count($arr); // size of the square matrix
    $primaryDiagonal = 0;
    $secondaryDiagonal = 0;

    for ($i = 0; $i < $n; $i++) {
        $primaryDiagonal += $arr[$i][$i];
        $secondaryDiagonal += $arr[$i][$n - $i - 1];
    }

    return abs($primaryDiagonal - $secondaryDiagonal);
}

// Read input
$n = intval(trim(fgets(STDIN)));
$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

// Call the function
$result = diagonalDifference($arr);
echo $result;
?>
