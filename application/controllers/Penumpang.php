<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penumpang extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Penumpang';
        $this->load->view('template/header', $data);
        $this->load->view('penumpang');
        $this->load->view('template/footer');
    }
}
    
    /* End of file Penumpang.php */
