<?php
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) 
    exit;

/**
 * This function can detect your browser name.
 * @return [string] [browser name]
 */
if ( ! function_exists( 'get_user_browser' ) ) {
    function get_user_browser()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $u_browser = '';
        if( preg_match( '/Trident/i', $u_agent ) ) {
            $u_browser = "ie";
        } elseif( preg_match( '/Firefox/i', $u_agent ) ) {
            $u_browser = "firefox";
        } elseif( preg_match( '/Safari/i', $u_agent ) ) {
            $u_browser = "safari";
        } elseif( preg_match( '/Chrome/i', $u_agent ) ) {
            $u_browser = "chrome";
        } elseif( preg_match( '/Flock/i', $u_agent ) ) {
            $u_browser = "flock";
        } elseif( preg_match( '/Opera/i',$u_agent ) || preg_match( '/OPR/i',$u_agent ) ) {
            $u_browser = "opera";
        }

        return $u_browser;
    }
}