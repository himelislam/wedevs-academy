<?php
/**
 * Plugin Name:       My WeDevs Academy main
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       A normal description for wedevs academy plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Muhaiminul Islam    
 * Author URI:        https://himelislam.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 if( !defined ('ABSPATH')){
    exit;
  }
 
  use WeDevs\Academy\Frontend;
  use WeDevs\Academy\Admin;
 
 require_once __DIR__ . '/vendor/autoload.php';
 require_once __DIR__ . '/includes/Admin.php';
 require_once __DIR__ . '/includes/Frontend.php';
 require_once __DIR__ . '/includes/Installer.php';
 require_once __DIR__ . '/includes/Assets.php';
 require_once __DIR__ . '/includes/Ajax.php';


  final class WeDevs_Academy{


    const version = '1.0';

    /**
     * Class Constrctor
     */
    private function __construct()
    {
        $this->define_constants();

        register_activation_hook( __FILE__ , [$this, 'activate']);

        add_action('plugins_loaded', [ $this , 'init_plugin']);
    }

    /** 
    * To Initial an single instence
    */
    public static function init(){
        static $instance = false;

        if( ! $instance ){
            $instance = new self();
        }

        return $instance;
    }

    public function define_constants(){
      define('WD_ACADEMY_VERSION', self::version);
      define('WD_ACADEMY_FILE', __FILE__ );
      define('WD_ACADEMY_PATH', __DIR__ );
      define('WD_ACADEMY_URL', plugins_url('', WD_ACADEMY_FILE));
      define('WD_ACADEMY_ASSETS', WD_ACADEMY_URL . '/assets');
    }


    /**
     * Initialize the plugin
     *
     * @return void
     */
    public function init_plugin(){

      new WeDevs\Academy\Assets();

      if(defined('DOING_AJAX') && DOING_AJAX ){
        new WeDevs\Academy\Ajax();
      }

      if(is_admin()){
        new WeDevs\Academy\Admin();
      }
      else{
        new WeDevs\Academy\Frontend();
      }

    }

    public function activate(){
      $installer = new WeDevs\Academy\Installer();
      $installer->run();
    }

  }
  
  /**
   * Initialize the main plugin
   */

  function wedevs_academy(){
    return WeDevs_Academy::init();
  }

  /**
   * kick off the plugin
   */

   wedevs_academy();