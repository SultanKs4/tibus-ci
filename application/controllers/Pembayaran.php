<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

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
