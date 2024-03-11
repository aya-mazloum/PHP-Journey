<?php
function filterNumbers($txt) {
    $numbers = [];
    $num = 0;

    for ($i=0; $i<strlen($txt); $i++) {
        if ($txt[$i] == "0")
            array_push($numbers, 0);
        if (is_numeric($txt[$i]) && $num == 0)
            $num += intval($txt[$i]);
        elseif (is_numeric($txt[$i]) && $num > 0)
            $num = ($num * 10) + intval($txt[$i]);
        elseif ($num > 0) {
            array_push($numbers, $num);
            $num = 0;
        }
    }
    
    if ($num > 0)
        array_push($numbers, $num);

    sort($numbers);
    print_r($numbers);
}

filterNumbers("hpd12aq3@8w$5");

?>