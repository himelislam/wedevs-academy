<?php
/**
 * Plugin Name:       My WeDevs Academy
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       A normal description for wedevs academy plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Himel Islam   
 * Author URI:        https://himelislam.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 if(!defined ('ABSPATH')){
    exit;
 }

 /**
  * The Main Plugin Class
  */

  class WeDevs_Academy{

    function __construct()
    {
        
    }

    /** 
    * To Initial an instence
    */
    public static function init(){
        static $instance = false;

        if(!$instance){
            $instance = new self();
        }

        return $instance;
    }
  }