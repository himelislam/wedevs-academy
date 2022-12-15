<?php

namespace WeDevs\Academy;

class Ajax {

    function __construct() {
        add_action( 'wp_ajax_wd_academy_enquiry', [$this, 'submit_enquiry'] );
    }

    public function submit_enquiry(){
        // check_ajax_referer( 'wd-ac-enquiry-form' );

        if(! wp_verify_nonce( $REQUEST['_wpnonce'], 'wd-ac-enquiry-form-2' )){
            wp_send_json_error([
                'message' => 'Nonce Verification Failed',
            ]);
        }
        
        wp_send_json_error([
            'message' => 'Something Went Wrong',
        ]);
        // wp_send_json_success();
    }
}