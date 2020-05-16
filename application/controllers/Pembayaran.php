<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();

		if (intval($this->session->userdata('id_level'))  > 1 ) {
			redirect('login', 'refresh');
		}
	}

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('template/header_pembayaran');
        $this->load->view('pembayaran/index');
        $this->load->view('template/footer_pembayaran');
        $this->load->library('session');
    }
}
    
    /* End of file Login.php */
