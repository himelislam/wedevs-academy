<?php

namespace WeDevs\Academy;

require_once __DIR__ . '/Frontend/Shortcode.php';

class Frontend {

    function __construct()
    {
        new Frontend\Shortcode();
    }
}