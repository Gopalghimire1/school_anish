<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Employee extends Api {

    public function __construct()
    {
        $this->in = (object)$_POST;
        parent::__construct();
        $this->CheckAuth();
    }


    public function list_get(){
        $data = $this->db->get('staff')->result();
        $this->response($data,200);
    }

    public function detail_post()
    {
        $this->db->from('staff');
        $this->db->where('id',$this->in->employee_id);
        $data = $this->db->get()->result_array();
        $this->response($data,200);
    }
}