<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');

        if (intval($this->session->userdata('id_level')) != 1) {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'MyAccount';
        $data['akun'] = $this->akun_model->getakunbyid($this->session->userdata('id'));
        $this->load->view('user/template/header', $data);
        $this->load->view('user/akun/index', $data);
        $this->load->view('user/template/footer');;
    }

    // public function tambah()
    // {
    //     $data['title'] = 'Tambah akun';
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('kota', 'Kota', 'required');
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required');


    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('user/template/header', $data);
    //         $this->load->view('user/akun/tambah', $data);
    //         $this->load->view('user/template/footer');
    //     } else {
    //         $this->akun_model->tambahdataakun();
    //         $this->session->set_flashdata('flash-data', ' ditambahkan');
    //         redirect('user/akun', 'refresh');
    //     }
    // }

    // public function hapus($id)
    // {
    //     $this->akun_model->hapusdataakun($id);
    //     $this->session->set_flashdata('flash-data', ' dihapus');
    //     redirect('user/akun', 'refresh');
    // }

    public function edit($id)
    {
        $data['title'] = 'Edit MyAccount';
        $data['akun'] = $this->akun_model->getakunbyid($id);

        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('nama_depan', 'nama_depan', 'required');
        $this->form_validation->set_rules('nama_belakang', 'nama_belakang', 'required');
        $this->form_validation->set_rules('telpon', 'telpon', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/template/header', $data);
            $this->load->view('user/akun/edit', $data);
            $this->load->view('user/template/footer');;
        } else {
            $this->akun_model->ubahdataakun(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('user/akun', 'refresh');
        }
    }
    // public function detail($id)
    // {
    //     $data['title'] = 'Detail Akun';
    //     $data['akun'] = $this->akun_model->getakunbyid($id);
    //     $this->load->view('user/template/header', $data);
    //     $this->load->view('user/akun/detail', $data);
    //     $this->load->view('user/template/footer');;
    // }
}
    
    /* End of file Akun.php */
