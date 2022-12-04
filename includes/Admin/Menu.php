<?php

namespace WeDevs\Academy\Admin;

class Menu {

    function __construct()
    {
        add_action('admin_menu', [$this, 'admin_menu']);
    }

    public function admin_menu(){
        $parent_slug = 'wedevs-academy';
        $capability = 'manage_options';

        add_menu_page(__('weDevs Academy', 'wedevs-academy'), __('Academy', 'wedevs-academy'), $capability, $parent_slug , [$this , 'plugin_page'], 'dashicons-welcome-learn-more');
        add_submenu_page($parent_slug, __('Address Book', 'wedevs-academy'), __('Address Book', 'wedevs-academy'), $capability, 'wedevs-academy-addressbook', [$this, 'addressbook_page']);
    }

    public function plugin_page(){
        echo 'Hello World';
    }

    public function addressbook_page(){
        echo 'Hello From Address Book';
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