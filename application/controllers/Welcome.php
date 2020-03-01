<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
        if (version_compare(phpversion(), '7.0.0', '<')) {
            $this->load->view( 'errors/html/error_php_v' );
        } else {
        
            $data['count'] = [
                $this->db->count_all('tbl_peminjaman'),
                $this->db->count_all('tbl_tamu'),
                $this->db->count_all('tbl_user'),
            ];
            $this->load->view( 'welcome_message', $data );

        }
	}
}
