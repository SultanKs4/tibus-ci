<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Akun_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus/public/api/'
        ]);
    }

    public function getallakun()
    {
        $response = $this->_client->request('GET', 'akun', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
    public function getakunbyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'akun', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function ubahdataakun() // JS2 B3 no 3
    {
        $data = [
            "id" => $this->input->post('id', true),
            "email" => $this->input->post('email', true),
            "nama_depan" => $this->input->post('nama_depan', true),
            "nama_belakang" => $this->input->post('nama_belakang', true),
            "telpon" => $this->input->post('telpon', true),
            "password" => $this->input->post('password', true),
            "id_level" => '1',
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'akun', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahdataakun()
    {
        $data = [
            "email" => $this->input->post('email', true),
            "nama_depan" => $this->input->post('nama_depan', true),
            "nama_belakang" => $this->input->post('nama_belakang', true),
            "telpon" => $this->input->post('telpon', true),
            "password" => $this->input->post('password', true),
            "id_level" => $this->input->post('id_level', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('POST', 'akun', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
    
    /* End of file akun_model.php */
