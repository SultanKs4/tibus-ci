<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'dashboard';
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/dashboard/index');
        $this->load->view('admin/template/footer');
    }
}
    
    /* End of file Admin_dashboard.php */
