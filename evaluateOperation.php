<?php
function evaluateOperation($operation) {
    $n1 = "";
    $i = 0;
    while ($operation[$i] != " ") {
        $n1 = $n1 . $operation[$i];
        $i++;
    }
    $n1 = intval($n1);

    while($operation[$i] == " ")
        $i++;

    $operator = $operation[$i];
    $i++;

    while($operation[$i] == " ")
        $i++;

    $n2 = "";
    while($i <  strlen($operation)) {
        $n2 = $n2 . $operation[$i];
        $i++;
    }
    $n2 = intval($n2);

    switch ($operator) {
        case '+':
            $result = $n1 + $n2;
            break;
        case '-':
            $result = $n1 - $n2;
            break;
        case '*':
            $result = $n1 * $n2;
            break;
        case '/':
            $result = $n1 / $n2;
            break;
        case '%':
            $result = $n1 % $n2;
            break;
        default:
            echo "You entered an invalid operator.";
    }
    
    echo "$operation = $result\n";
}

evaluateOperation("10 + 9");
evaluateOperation("144 - 44");
evaluateOperation("22 * 2");
evaluateOperation("1002 / 22");
evaluateOperation("232 % 33");

?>