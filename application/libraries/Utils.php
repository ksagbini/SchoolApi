<?php

/**
 * Created by PhpStorm.
 * User: KevTS
 * Date: 7/05/17
 * Time: 2:02 PM
 */
class Utils
{


    /**
     * Generate hash string
     * @param $string
     * @return string
     */
    public static function getHash($string)
    {
        return hash("sha512", $string);
    }

    /**
     * Get current system datetime
     * @param string $format
     * @return false|string
     */
    public static function getCurrentTime($format = "Y-m-d H:i:s")
    {
        return date($format);
    }


}