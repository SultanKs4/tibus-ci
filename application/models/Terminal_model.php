<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Terminal_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus-ci-admin/api/'
        ]);
    }

    public function getallterminal()
    {
        $response = $this->_client->request('GET', 'terminal', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function hapusdataterminal($id)
    {
        $response = $this->_client->request('DELETE', 'terminal', [
            'form_params' => [
                'id' => $id,
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahdataterminal() // JS2 B3 no 3
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "kota" => $this->input->post('kota', true),
            "alamat" => $this->input->post('alamat', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('POST', 'terminal', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahdataterminal() // JS2 B3 no 3
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "kota" => $this->input->post('kota', true),
            "alamat" => $this->input->post('alamat', true),
            "id" => $this->input->post('id', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'terminal', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function getterminalbyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'terminal', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
    
    /* End of file terminal_model.php */