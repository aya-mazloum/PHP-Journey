<?php
function flipNumber($num) {
    $flippedNum = 0;
    $flippedNum += $num % 10;
    $num /= 10;
    
    while($num >= 1) {
        $flippedNum = ($flippedNum*10) + $num % 10;
        $num /= 10;
    }

    return $flippedNum;
}

$n = 51023692027;
$flippedN = flipNumber($n);
echo "$n flipped is: $flippedN";

?>