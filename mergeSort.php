<?php
function merge($left, $right) {
    $leftSize = count($left);
    $rightSize = count($right);

    $i = $j = 0;
    $sortedArray = [];
    
    while ($i < $leftSize && $j < $rightSize) {
        if ($left[$i] < $right[$j]) {
            array_push($sortedArray, $left[$i]);
            $i++;
        }
        else {
            array_push($sortedArray, $right[$j]);
            $j++;
        }
    }

    while ($i < $leftSize) {
        array_push($sortedArray, $left[$i]);
        $i++;
    }

    while ($j < $rightSize) {
        array_push($sortedArray, $right[$j]);
        $j++;
    }

    return $sortedArray;
}


function mergeSort($arr) {
    $count = count($arr);

    if($count <= 1)
        return $arr;

    $mid = intval($count / 2);

    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

$arr = [10, 4, 6, 12, 9, 1];
echo "Initial array is : " . implode(",", $arr) . "\n";

$sortedArray = mergeSort($arr);
echo "Sorted array is: " . implode(",", $sortedArray);

?>