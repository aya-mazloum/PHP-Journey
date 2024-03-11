<?php
function decimalToBinary($dec) {
    $binStr = "";

    while($dec >= 1 ) {
        $temp = $dec % 2;
        $binStr = $temp . $binStr;
        $dec /= 2;
    }

    $bin = intval($binStr);

    echo "$temp in binary is: $bin";
}

decimalToBinary(66);

?>