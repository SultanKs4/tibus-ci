<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class status_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus-ci-admin/api/'
        ]);
    }

    public function getallstatus()
    {
        $response = $this->_client->request('GET', 'status', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function hapusdatastatus($id)
    {
        $response = $this->_client->request('DELETE', 'status', [
            'form_params' => [
                'id' => $id,
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahdatastatus() // JS2 B3 no 3
    {
        $data = [
            "name" => $this->input->post('name', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('POST', 'status', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahdatastatus() // JS2 B3 no 3
    {
        $data = [
            "name" => $this->input->post('name', true),
            "id" => $this->input->post('id', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'status', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function getstatusbyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'status', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
    
    /* End of file status_model.php */
