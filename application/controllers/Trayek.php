<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Trayek extends CI_Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('home') != null) {
            $this->data = $this->session->userdata('home');
            $this->load->model('Trayek_model', "trayek");
        } else {
            redirect("home");
        }
    }

    public function index()
    {
        if ($this->input->post('id') != null) {
            $data = array(
                'id' => $this->input->post('id'),
                'po' => $this->input->post('po'),
                'dari' => $this->input->post('dari'),
                'tujuan' => $this->input->post('tujuan'),
                'jam_berangkat' => $this->input->post('jam_berangkat'),
                'jam_tiba' => $this->input->post('jam_tiba'),
                'tanggal_berangkat' => $this->input->post('tanggal_berangkat'),
                'tanggal_tiba' => $this->input->post('tanggal_tiba'),
                'harga' => $this->input->post('harga'),
            );
            $this->session->unset_userdata('home');
            $this->session->set_userdata('trayek', $data);
            redirect("penumpang");
        } else {
            $data['title'] = "Trayek";
            $dari = $this->data['dari'];
            $tujuan = $this->data['tujuan'];
            $tanggal = $this->data['tanggal'];

            $data['trayek'] = $this->trayek->searchTrayek($dari, $tujuan, $tanggal);
            $this->load->view('template/header', $data);
            $this->load->view('search/index', $data);
            $this->load->view('template/footer');
        }
    }
}
    
    /* End of file Trayek.php */
