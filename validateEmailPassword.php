<?php
function validatePassword($p) {
    $len = strlen($p);
    if ($len < 12) {
        echo "$p is too short.";
        return;
    }
    if ($len > 24) {
        echo "$p is too long.";
        return;
    }

    $hasDigit = $hasUpperLetter = $hasLowerLetter = $hasSymbol = false;

    $lowerLetterRegex = "/[a-z]/";
    $upperLetterRegex = "/[A-Z]/";
    $symbolsRegex = "/^[!@#$%^&*()-_+=<>?]+$/";

    for ($i=0; $i<$len; $i++) {
        if (ctype_digit($p[$i]))
            $hasDigit = true;
        elseif (preg_match($lowerLetterRegex, $p[$i]))
            $hasLowerLetter = true;
        elseif (preg_match($upperLetterRegex, $p[$i]))
            $hasUpperLetter = true;
        elseif (preg_match($symbolsRegex, $p[$i]))
            $hasSymbol = true;
        else {
            echo "$p is not a valid password. Password can contain only a-z or A-Z 0-9 or !@#$%^&*()-_+=<>?.";
            return;
        }
    }
    
    if ($hasDigit && $hasSymbol && $hasUpperLetter && $hasLowerLetter)
        echo "$p is a valid password";
    else
        echo "$p is not a valid password. Password must contain at least one lowercase letter, one uppercase letter, one digit and one symbol(!@#$%^&*()-_+=<>?.).";
}


$password = "Password@1234";
validatePassword($password);

?>