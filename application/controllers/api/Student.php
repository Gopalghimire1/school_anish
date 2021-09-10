<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Student extends Api {
   
    public function __construct()
    {

        $this->in = (object)$_POST;
        parent::__construct();
        $this->CheckAuth();
        $this->load->model('student_model');
        
    }

    public function list_post(){
        
        $this->db->select('a.*,s.*');
        $this->db->from('enroll as a');
        $this->db->where('a.class_id',$this->in->class_id)->where('a.section_id',$this->in->section_id)->where('a.branch_id',$this->in->branch_id);
        $this->db->join('student as s', 'a.student_id = s.id', 'inner');
        $s = $this->db->get()->result();
        $this->response($s,200);

    }


    public function normalList_get(){
       $this->db->from('student');
       $data = $this->db->get()->result();
       $this->response([$data],200);
    }


    // $this->hasAuth,$this->token,$this->auth,$this->user

    // sidhsjfhsjdfhj

    
  
}


?>