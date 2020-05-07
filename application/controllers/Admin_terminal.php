<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_terminal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('terminal_model');
    }

    public function index()
    {
        $data['title'] = 'terminal';
        $data['terminal'] = $this->terminal_model->getallterminal();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/terminal/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Terminal';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/terminal/tambah', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->terminal_model->tambahdataterminal();
            $this->session->set_flashdata('flash-data', ' ditambahkan');
            redirect('admin_terminal', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->terminal_model->hapusdataterminal($id);
        $this->session->set_flashdata('flash-data', ' dihapus');
        redirect('admin_terminal', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Terminal';
        $data['terminal'] = $this->terminal_model->getterminalbyid($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/terminal/edit', $data);
            $this->load->view('admin/template/footer');;
        } else {
            $this->terminal_model->ubahdataterminal(); // JS2 B3 no 1
            $this->session->set_flashdata('flash-data', ' diedit');
            redirect('Admin_terminal', 'refresh');
        }
    }
}
    
    /* End of file Admin_terminal.php */
