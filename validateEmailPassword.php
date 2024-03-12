<?php
function validateEmail($email) {
    $onlyLettersRegex = "/^[A-Za-z]+$/";
    if (!preg_match($onlyLettersRegex, $email[0]) || !preg_match($onlyLettersRegex, $email[0]) || !preg_match($onlyLettersRegex, $email[-1]))
        return false;

    $parts1 = explode("@", $email);
    if (count($parts1) != 2 || !preg_match($onlyLettersRegex, $parts1[1][0]))
        return false;

    $parts2 = explode(".", $parts1[1]);
    if (count($parts1) != 2 || $parts2[0][-1] == "." || $parts2[1][0] == ".")
        return false;

    if (!preg_match($onlyLettersRegex, $parts2[0]))
        return false;

    if (!preg_match($onlyLettersRegex, $parts2[1]))
        return false;

    $emailPart1Regex = "/^[A-Za-z0-9._]+$/";
    if (!preg_match($emailPart1Regex, $parts1[0]))
        return false;

    return true;
}

$email = "example_1@domain.com";
$isValidEmail = validateEmail($email);

if ($isValidEmail)
    echo "$email is a valid email address.\n";
else
    echo "$email is not a valid email address.\n";




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