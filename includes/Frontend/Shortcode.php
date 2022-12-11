<?php

namespace WeDevs\Academy\Frontend;

class Shortcode {

    function __construct()
    {
        add_shortcode( 'wedevs-academy', [$this, 'render_shortcode']);
    }

    public function render_shortcode( $atts, $content = ''){
        wp_enqueue_script( 'academy-script');
        wp_enqueue_style( 'academy-style');

        return '<div class="academy-shortcode">Hello From Shortcode</div>';
    }
}