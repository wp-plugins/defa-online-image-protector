<?php
/*
Plugin Name: Defa Online Image Protector Free Edition
Plugin URI: http://ww2.juthawong.com/imageprotector
Description: Protect your image from being downloaded or stolen and hotlink
Version: 3.0
Author: Juthawong Naisanguansee
Author URI: http://www.juthawong.com/
License: Freeware
*/
add_action('wp_head','defago2');
add_action('wp_footer', 'defaset23');

function defago2()
{
include( plugin_dir_path( __FILE__ ) . 'includetop.php');

}
function defaset23()
{

include( plugin_dir_path( __FILE__ ) . 'includebottom.php');
}


?>
