<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_status extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('status_model');
    }

    public function index()
    {
        $data['title'] = 'status';
        $data['status'] = $this->status_model->getallstatus();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/status/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah status';
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/status/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->status_model->tambahdatastatus();
            $this->session->set_flashdata('flash-data', ' ditambahkan');
            redirect('admin_status', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->status_model->hapusdatastatus($id);
        $this->session->set_flashdata('flash-data', ' dihapus');
        redirect('admin_status', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data status';
        $data['status'] = $this->status_model->getstatusbyid($id);

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/status/edit', $data);
            $this->load->view('admin/template/footer');;
        } else {
            $this->status_model->ubahdatastatus(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('Admin_status', 'refresh');
        }
    }
}
    
    /* End of file Admin_status.php */
