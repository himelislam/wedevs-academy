<?php

namespace WeDevs\Academy\Traits;


/**
 * Error Handler Trait
 */
trait Form_Error {

    /**
     * Holds the Errors
     *
     * @var array
     */
    public $errors = [];



    /**
     * Check if the form has any error
     *
     * @param string $key
     * @return boolean
     */
    public function has_error( $key ){
        return isset($this->errors[$key]) ? true : false;
    }


    /**
     * Get the error of any form
     *
     * @param string $key
     * @return string/false
     */
    public function get_error( $key ){
        if(isset($this->errors[$key])){
            return $this->errors[$key];
        }

        return false;
    }
}