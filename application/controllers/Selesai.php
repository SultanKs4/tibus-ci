<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Selesai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (intval($this->session->userdata('id_level'))  > 1 || $this->session->userdata('id') == null) {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Selesai';
        $this->load->view('template/header', $data);
        $this->load->view('selesai');
        $this->load->view('template/footer');
    }
}
    
    /* End of file Penumpang.php */
