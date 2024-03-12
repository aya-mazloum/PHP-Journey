<?php
function validateIPv4($ip) {
    if($ip[0] == "." || $ip[-1] == ".")
        return false;

    $parts = explode(".", $ip);
    
    if (count($parts) != 4)
        return false;

    for ($i=0; $i<4; $i++) {
        if(!ctype_digit($parts[$i]) || intval($parts[$i]) < 0 || !ctype_digit($parts[$i]) || intval($parts[$i]) > 255)
            return false;
    }

    return true;
}

$ip = "21.5.32.252";

$isValid = validateIPv4($ip);

if ($isValid)
    echo "$ip is a valid IPv4 address.";
else
    echo "$ip is not a valid IPv4 address.";

?>