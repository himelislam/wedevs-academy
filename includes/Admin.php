<?php

namespace WeDevs\Academy;
require_once __DIR__ . '/Admin/Menu.php';

class Admin {

    function __construct()
    {
        new Admin\Menu();
    }
}