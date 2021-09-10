<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Branch extends Api {
   
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Branch_model');
      
    }

    public function list_get(){
        $test=[];
        $data = $this->db->get('branch')->result_array();
        foreach ($data as $value) {
           $this->db->from('class');
           $this->db->where('branch_id',$value['id']);
           $c['class'] = $this->db->get()->result();
  
           
           $this->db->from('section');
           $this->db->where('branch_id',$value['id']);
           $s['section'] = $this->db->get()->result();

           array_push($value,$c,$s);
           array_push($test,$value);
            // print_r($value);
            // $this->response($value,200);
        }
        $cc = ['branch'=>$test];
        
        $this->response($cc,200);

        // $this->db->select('*');
        // $this->db->from('branch');
        // $this->db->join('class','branch.id = class.branch_id');
        
        // $c = $this->db->get()->result();

        // print_r($c);
    }

    public function normalList_get(){
        $data = $this->db->get('branch')->result();
        $this->response($data,200);
    }

    


}