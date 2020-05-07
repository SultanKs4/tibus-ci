<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class akun_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/proyek1/tibus-ci-admin/api/'
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
}
    
    /* End of file akun_model.php */
