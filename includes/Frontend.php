<?php

namespace WeDevs\Academy;

require_once __DIR__ . '/Frontend/Shortcode.php';
require_once __DIR__ . '/Frontend/Enquiry.php';

class Frontend {

    function __construct()
    {
        new Frontend\Shortcode();
        new Frontend\Enquiry();
    }
}