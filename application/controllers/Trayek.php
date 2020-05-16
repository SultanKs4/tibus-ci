<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Trayek extends CI_Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        if ($this->session->flashdata('home') != null) {
            $this->data = $this->session->flashdata('home');
            $this->load->model('Trayek_model', "trayek");
        } else {
            redirect("home");
        }
    }

    public function index()
    {
        $dari = $this->data['dari'];
        $tujuan = $this->data['tujuan'];
        $tanggal = $this->data['tanggal'];

        $data['trayek'] = $this->trayek->searchTrayek($dari, $tujuan, $tanggal);
        $this->load->view('template/header');
        $this->load->view('search/index', $data);
        $this->load->view('template/footer');
    }
}
    
    /* End of file Trayek.php */
