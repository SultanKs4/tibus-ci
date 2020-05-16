<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (intval($this->session->userdata('id_level'))  < 2 ) {
			redirect('login', 'refresh');
		}
    }

    public function index()
    {
        $data['title'] = 'dashboard';
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/dashboard/index');
        $this->load->view('admin/template/footer');
    }
}
    
    /* End of file Dashboard.php */