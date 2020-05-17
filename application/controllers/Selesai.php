<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Selesai extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Selesai';
        $this->load->view('template/header', $data);
        $this->load->view('selesai');
        $this->load->view('template/footer');
    }
}
    
    /* End of file Penumpang.php */
