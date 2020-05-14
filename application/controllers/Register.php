<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');
    }

    public function index()
    {
        $data['title'] = 'Register';
        $this->load->view('template/header_register');
        $this->load->view('register/index');
        $this->load->view('template/footer_register');
        $this->load->library('session');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('nama_depan', 'nama_depan', 'required');
        $this->form_validation->set_rules('nama_belakang', 'nama_belakang', 'required');
        $this->form_validation->set_rules('telpon', 'telpon', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('id_level', 'id_level', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header_register');
            $this->load->view('register/index');
            $this->load->view('template/footer_register');
        } else {
            $this->akun_model->tambahdataakun();
            $this->session->set_flashdata('flash-data', ' ditambahkan');
            redirect('login', 'refresh');
        }
    }
}
    
    /* End of file Login.php */
