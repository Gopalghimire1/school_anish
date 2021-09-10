<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Section extends Api {

    public function list_get(){
        $data = $this->db->get('section')->result();
        $this->response($data,200);
    }
}