<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_akun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');
    }

    public function index()
    {
        $data['title'] = 'akun';
        $data['akun'] = $this->akun_model->getallakun();
        if ($this->input->post('keyword')) {
            $data['akun'] = $this->akun_model->caridataakun();
        }
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/akun/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah akun';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/akun/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->akun_model->tambahdataakun();
            $this->session->set_flashdata('flash-data', ' ditambahkan');
            redirect('admin_akun', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->akun_model->hapusdataakun($id);
        $this->session->set_flashdata('flash-data', ' dihapus');
        redirect('admin_akun', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data akun';
        $data['akun'] = $this->akun_model->getakunbyid($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/akun/edit', $data);
            $this->load->view('admin/template/footer');;
        } else {
            $this->akun_model->ubahdataakun(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('Admin_akun', 'refresh');
        }
    }
    public function detail($id)
    {
        $data['title'] = 'Detail Akun';
        $data['akun'] = $this->akun_model->getakunbyid($id);
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/akun/detail', $data);
        $this->load->view('admin/template/footer');;
    }
}
    
    /* End of file Admin_akun.php */
