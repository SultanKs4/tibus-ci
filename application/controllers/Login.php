<?php

use GuzzleHttp\Exception\GuzzleException;

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->client = new GuzzleHttp\Client(['base_uri' => 'http://localhost/proyek1/tibus/public/api/']);
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('template/header_login');
        $this->load->view('login/index');
        $this->load->view('template/footer_login');
        $this->load->library('session');
    }

    public function proses_login()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars($this->input->post('password'));

        try {
            $response = $this->client->post('akun/check', [
                'form_params' => [
                    'email' => $email,
                    'password' => $password,
                    'tkn' => 'qwe123'
                ]
            ]);
            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody()->getContents(), true);
                foreach ($data['data'] as $key) {
                    $this->session->set_userdata('email', $key['email']);
                    $this->session->set_userdata('id_level', $key['id_level']);
                    $this->session->set_userdata('id', $key['id']);
                }
                if ($this->session->userdata('id_level') == "2" || $this->session->userdata('id_level') == "3") {
                    redirect('admin/dashboard');
                } else {
                    redirect('home');
                }
            }
        } catch (GuzzleException $th) {
            $data['pesan'] = "email dan password anda salah";
            $data['title'] = 'Login';
            $this->load->view('template/header_login', $data);
            $this->load->view('login/index');
            $this->load->view('template/footer_login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}
    
    /* End of file Login.php */
