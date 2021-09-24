<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Fees extends Api {
    public function __construct()
    {
        parent::__construct();
        $this->in = (object)$_POST;
        // $this->CheckAuth();
        $this->load->model('fees_model');
    }


    public function groups_get(){
        $data = $this->db->get('fee_groups')->result_array();
        $this->response($data,200);
    }

    public function types_get(){
        $data = $this->db->get('fees_type')->result_array();
        $this->response($data,200);
    }


    public function invoiceList_post()
    {
        // print_r($this->in);

        // echo "jellooo";
        $data = $this->fees_model->getInvoiceList($this->in->class_id, $this->in->section_id,$this->in->branch_id);
        $this->response(['data'=>$data],200);

    }


    public function dueInvoice_post(){
        // print_r($this->in);
        $data = $this->fees_model->getDueInvoiceList($this->in->class_id,$this->in->section_id,$this->in->feegroup_id,$this->fee_feetype_id);
        $this->response(['data'=>$data],200);

    }
}