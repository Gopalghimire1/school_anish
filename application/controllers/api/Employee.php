<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Employee extends Api {

    public function list_get(){
        $data = $this->db->get('staff')->result();
        $this->response($data,200);
    }
}