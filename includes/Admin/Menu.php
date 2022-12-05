<?php

namespace WeDevs\Academy\Admin;

require_once __DIR__ . '/Addressbook.php';

class Menu {

    function __construct()
    {
        add_action('admin_menu', [$this, 'admin_menu']);
    }

    public function admin_menu(){
        $parent_slug = 'wedevs-academy';
        $capability = 'manage_options';

        add_menu_page(__('weDevs Academy', 'wedevs-academy'), __('Academy', 'wedevs-academy'), $capability, $parent_slug , [$this , 'addressbook_page'], 'dashicons-welcome-learn-more');

        add_submenu_page($parent_slug, __('Address Book', 'wedevs-academy'), __('Address Book', 'wedevs-academy'), $capability, $parent_slug , [$this, 'addressbook_page']);

        add_submenu_page($parent_slug, __('Settings', 'wedevs-academy'), __('Settings', 'wedevs-academy'), $capability, 'wedevs-academy-settings' , [$this, 'settings_page']);
    }

    public function addressbook_page(){
        $addressbook = new Addressbook();
        $addressbook->plugin_page();
    }

    public function settings_page(){
        echo 'Hello From Settings';
    }
}




// <?php

// namespace WeDevs\Academy\Admin;

// /**
//  * The Menu Handler Class
// */
// class Menu{

//     function __construct(){
//         add_action('admin_menu', [$this , 'admin_menu']);
//     }

//     public function admin_menu(){
//         add_menu_page(__('weDevs Academy', 'wedevs-academy'), __('Academy', 'wedevs-academy'), 'manage_options', 'wedevs-academy', [$this , 'plugin_page'], 'dashicons-welcome-learn-more');
//     }

//     public function plugin_page()
//     {
//         echo 'Helllo Vai Brothers';
//     }
// }