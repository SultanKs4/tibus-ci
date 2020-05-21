<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Method_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus/public/api/'
        ]);
    }

    public function getallmethod()
    {
        $response = $this->_client->request('GET', 'method', [
            'query' => [
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function hapusdatamethod($id)
    {
        $response = $this->_client->request('DELETE', 'method', [
            'form_params' => [
                'id' => $id,
                'tkn' => 'qwe123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahdatamethod() // JS2 B3 no 3
    {
        $data = [
            "name" => $this->input->post('name', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('POST', 'method', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahdatamethod() // JS2 B3 no 3
    {
        $data = [
            "name" => $this->input->post('name', true),
            "id" => $this->input->post('id', true),
            'tkn' => 'qwe123'
        ];
        $response = $this->_client->request('PUT', 'method', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function getmethodbyid($id) //JS4 B1 no 5
    {
        $response = $this->_client->request('GET', 'method', [
            'query' => [
                'tkn' => 'qwe123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
    
    /* End of file method_model.php */
