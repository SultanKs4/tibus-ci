<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('terminal_model');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['terminal'] = $this->terminal_model->getallterminal();
		$this->form_validation->set_rules('dari', 'Dari', 'required|differs[tujuan]');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required|differs[dari]');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('penumpang', 'Penumpang', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header');
			$this->load->view('home/index', $data);
			$this->load->view('template/footer');
		} else {
			$data = array(
				'dari' => $this->input->post('dari'),
				'tujuan' => $this->input->post('tujuan'),
				'tanggal' => $this->input->post('tanggal'),
				'penumpang' => $this->input->post('penumpang')
			);
			$this->session->set_flashdata('home', $data);
			redirect("trayek");
		}
	}
}
