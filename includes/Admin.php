<?php

namespace WeDevs\Academy;

require_once __DIR__ . '/Admin/Menu.php';

class Admin {

    function __construct(){
        $this->dispatch_actions();

        new Admin\Menu();
    }

    public function dispatch_actions(){
        $addressbook = new Admin\Addressbook();
        
        add_action('admin_init', [$addressbook, 'form_handler']);
    }
}