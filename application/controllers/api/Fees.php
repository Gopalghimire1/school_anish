<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Fees extends Api {
    public function __construct()
    {
        $this->input = (object)$_POST;
        parent::__construct();
        $this->CheckAuth();
        $this->load->model('fees_model');
    }


    public function invoiceList_post()
    {
        $data = $this->fees_model->getInvoiceList($this->input->class_id, $this->input->section_id,$this->input->branch_id);
        $this->response($data,200);

    }
}