<?php

$date = '0000-00-00T00:00:00+00:00';

function convertGMT($date = null)
{
    if ($date == null || $date == '') {return false;}
    $date      = str_ireplace("Z", "+00:00", $date);
    $date_regx = "/^" .
    // Allows years 0000-9999
    "[0-9]{4}" .
    // Allows -
    "-" .
    // Allows month 01-12
    "(0[1-9]|1[0-2])" .
    // Allows -
    "-" .
    // Allows day 01-31
    "(0[1-9]|[1-2][0-9]|3[0-1])" .
    // Allows T
    "T" .
    // Allows Hr 00
    "([0-1][0-9]|2[0-3])" .
    // Allows :
    ":" .
    // Allows min 00
    "([0-5][0-9])" .
    // Allows :
    ":" .
    // Allows sec 00
    "([0-5][0-9])" .
    // Allows + -
    "[+-]" .
    // Allows 00:
    "0[0-9]|1[0-4]" .
    // Allows :
    ":" .
    // Allows :00
    "0[0]|3[0]|4[05]" .
        "$/";
    if (!preg_match($date_regx, $date)) {
        return false;
    }
    $date = new DateTime($date);
    $date->setTimezone(new DateTimeZone('GMT'));
    return $date->format('Y-m-d H:i:s');
}

var_dump(convertGMT($date));
