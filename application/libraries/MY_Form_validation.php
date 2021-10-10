<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_Form_validation extends CI_Form_validation {
 
    public function __construct($config = array())
    {
        parent::__construct($config);
    }

    /**
     *
     * valid_alfanumeric: memeriksa data dengan menggunakan regular expression hanya data : a-z, A-Z, 0-9, dan _ yang diijinkan, sedangkan karakter – tidak diperbolehkan
     *
     * @param string $username the username to be validated
     * @return boolean
     *
     */
 
    public function valid_username($username) {
        return ((preg_match("/^[a-zA-Z0-9_]+$/", $username))?true:false);
    }
}

