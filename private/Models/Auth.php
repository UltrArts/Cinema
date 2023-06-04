<?php

    /**
     * Authentication Class
     * 
     */


class Auth
{

    public static function authenticate($row)
    {
        self::boot_session();
        $_SESSION['USER'] = $row;
    }

    public static function logout()
    {
        self::boot_session();
        if(isset($_SESSION['USER']))
            unset($_SESSION['USER']);
    }

    public static function is_logged()
    {
        self::boot_session();
        if(isset($_SESSION['USER']))
            return true;

        return false;
    }

    public  static function user()
    {
        self::boot_session();
        if(isset($_SESSION['USER']))
            return  $_SESSION['USER'][0];

    }       

    public static function boot_session(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

}