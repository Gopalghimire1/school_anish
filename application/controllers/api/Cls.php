<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Cls extends Api {

    public function list_get(){
        $alldata=[];
        $data = $this->db->get('class')->result_array();
        foreach ($data as $key => $cls) {
            # code...
            $this->db->select('section.*');
            $this->db->from('sections_allocation');
            $this->db->join('section', 'section.id = sections_allocation.section_id');
            $this->db->where('sections_allocation.class_id',$cls['id']);
            $_data = $this->db->get()->result_array();
            $cls['sections']=$_data;
            array_push($alldata,$cls);
        }
        $this->response($alldata,200);
        // $this->response($data,200);
    }


    public function classwithsection_get(){
        $this->db->select('*');
        $this->db->from('sections_allocation');
        $this->db->join('class', 'class.id = sections_allocation.class_id');
        $this->db->join('section', 'section.id = sections_allocation.sction_id');
        $data = $this->db->get()->result_array();
        $this->response($data,200);
    }


}