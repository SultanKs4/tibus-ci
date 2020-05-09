<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Method extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('method_model');
    }

    public function index()
    {
        $data['title'] = 'method';
        $data['method'] = $this->method_model->getallmethod();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/method/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah method';
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/method/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->method_model->tambahdatamethod();
            $this->session->set_flashdata('flash-data', ' ditambahkan');
            redirect('admin_method', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->method_model->hapusdatamethod($id);
        $this->session->set_flashdata('flash-data', ' dihapus');
        redirect('admin_method', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data method';
        $data['method'] = $this->method_model->getmethodbyid($id);

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/method/edit', $data);
            $this->load->view('admin/template/footer');;
        } else {
            $this->method_model->ubahdatamethod(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('Admin_method', 'refresh');
        }
    }
}
    
    /* End of file Method.php */