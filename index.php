<?php

/**
 * ModUtils Class
 */
class ModUtils
{

    public function __construct()
    {
    }

    /**
     * method to convert datetime with timezone into UTC datetime
     *
     * @param string $date (yyyy-mm-ddTH:i:s+00:00)
     * @return array
     * @author rajul.mondal
     * @since Nov 25, 2016
     */
    public function ConvertDatetoGMTDate($datetime)
    {
        // default response for the method
        $response = array(
            'result'     => false,
            'error_type' => 1,
            'datetime'   => null,
        );
        // datetime empty validation
        if ($datetime == null || $datetime == '') {
            return $response;
        }
        // if timezone is z set default value in datetime
        $datetime = str_ireplace("Z", '+00:00', $datetime);
        // expression for datetime
        $datetime_regx = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/";
        // expression for +ve timezone
        $datetime_regx_plus = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])[\+](0[0-9]|1[0-4]):(0[0]|3[0]|4[0-5])$/";
        // expression for -ve timezone
        $datetime_regx_minus = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])[\-](0[0-9]|1[0-2]):(0[0]|3[0]|4[0-5])$/";
        
        // if not satisfying both the condition then return false
        if (!preg_match($datetime_regx, $datetime) && !preg_match($datetime_regx_plus, $datetime) && !preg_match($datetime_regx_minus, $datetime)) {
            return $response;
        }

        // convertion of UTC datetime into given timezone
        $datetime = new DateTime($datetime);
        $datetime->setTimezone(new DateTimeZone('GMT'));
        $response = array(
            'result'   => true,
            'datetime' => $datetime->format('Y-m-d H:i:s'),
        );
        return $response;
    }

    /**
     * method to convert UTC datetime into local datetime with timezone
     *
     * @param string $datetime (yyyy-mm-dd H:i:s)
     * @param string $timezone (+00:00)
     * @return array
     * @author rajul.mondal
     * @since Mar 17, 2017
     */
    public function ConvertGMTDateToLocalDate($datetime, $timezone)
    {
        // default response for the method
        $response = array(
            'result'     => false,
            'error_type' => 1,
            'datetime'   => null,
        );
        // datetime empty validation
        if ($datetime == null || $datetime == '') {
            return $response;
        }
        // if timezone is null or empty set default value
        if ($timezone == null || $timezone == '') {
            $timezone = $sugar_config['gcm_cstm_const']['timezone']['gmt'];
        }
        // expression for datetime
        $datetime_regx = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/";
        // expression for +ve timezone
        $timezone_regx_plus = "/^[\+](0[0-9]|1[0-4]):(0[0]|3[0]|4[0-5])$/";
        // expression for -ve timezone
        $timezone_regx_minus = "/^[\-](0[0-9]|1[0-2]):(0[0]|3[0]|4[0-5])$/";

        // if not satisfying both the condition then return false
        if (!preg_match($datetime_regx, $datetime) && !preg_match($timezone_regx_plus, $timezone) && !preg_match($timezone_regx_minus, $timezone)) {
            $response['error_type'] = 2;
            return $response;
        }

        // convertion of UTC datetime into given timezone
        $datetime = new DateTime($datetime, new DateTimeZone('UTC'));
        $datetime->setTimezone(new DateTimeZone($timezone));
        $response = array(
            'result'   => true,
            'datetime' => $datetime->format('Y-m-d H:i:s'),
        );
        return $response;
    }
}

$mod = new ModUtils();
//var_dump($mod->ConvertDatetoGMTDate('1990-03-30T00:00:00+05:30'));
var_dump($mod->ConvertGMTDateToLocalDate('1990-03-29 18:30:00', '+05:30'));
