<?php
/*
Plugin Name: Average CMS Branding
Description: Admin modifications for Average CMS branding
Version: 0.1
License: GPL
Author: Nathan L Smith
Author URI: http://nlsmith.com/
*/

function acms_branding_admin_head() {
    $plugin_name = 'acms_branding';
    $location = ( ( empty( $_SERVER['HTTPS'] ) ) ? WP_CONTENT_URL : str_replace( 'http://', 'https://', WP_CONTENT_URL ) ) . '/plugins/acms-branding/logo.png';
?>
<style type="text/css">
    #header-logo {
        background: transparent url(<? echo $location; /* is this a bat? */?>) no-repeat scroll center center;
    }
    #footer-left { visibility: hidden; }
</style>
<?
}

add_action( 'admin_head', 'acms_branding_admin_head' );
?>
