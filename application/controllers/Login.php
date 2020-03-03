<?php

Class Login extends CI_Controller {
	function index() {

        if (version_compare(phpversion(), '7.0.0', '<')) {
            $this->load->view( 'errors/html/error_php_v' );
        } else {
        	if ( ! empty( $_SESSION['login'] ) === array() ) {
                $this->load->view( 'login' );
        	} else {
                redirect( 'auth/check' );
        	}
        }
	}
}