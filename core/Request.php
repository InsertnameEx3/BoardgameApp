<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

class Request
{
    public static function uri()
    {
        /**
         * trim() delete first and trailing '/'
         * parse_url() gets a specific part of the 'REQUEST_URI'
         */
        $site = trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );

        $site = str_replace('~s1129640/P1_OOAPP_Opdracht', '', $site);
        $site = str_replace('~s1129640/P1_OOAPP_Opdracht/', '', $site);
        return $site;


    }

    public static function method()
    {
        /**
         * GET of POST method
         */
        return $_SERVER['REQUEST_METHOD'];
    }
}