<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Parents extends Api {

    public function list_get(){
        $data = $this->db->get('parent')->result();
        $this->response($data,200);
    }

    public function listWithStudent_get(){

        $parent=[];
        $data = $this->db->get('parent')->result_array();
        foreach ($data as $value) {
            $this->db->from('student');
            $this->db->where('parent_id',$value['id']);
            $s['student'] = $this->db->get()->result();
            array_push($value,$s);
            array_push($parent,$value);
        }
        $list = ['parent'=>$parent];
        $this->response($list,200);
    }
}