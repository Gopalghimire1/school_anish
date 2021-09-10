<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Fees extends Api {
    public function __construct()
    {
        $this->input = (object)$_POST;
        parent::__construct();
        $this->load->model('fees_model');
    }


    public function invoiceList_post()
    {
        $this->db->select('e.student_id,e.roll,s.first_name,s.last_name,s.register_no,s.mobileno,c.name as class_name,se.name as section_name');
        $this->db->from('fee_allocation as fa');
        $this->db->join('enroll as e', 'e.student_id = fa.student_id', 'inner');
        $this->db->join('student as s', 's.id = e.student_id', 'left');
        $this->db->join('class as c', 'c.id = e.class_id', 'left');
        $this->db->join('section as se', 'se.id = e.section_id', 'left');
        $this->db->where('fa.branch_id', $this->input->branch_id);
        $this->db->where('e.class_id', $this->input->class_id);
        $result = $this->db->get()->result_array();

        // $data = $this->fees_model->getInvoiceList($this->input->class_id, $this->input->section_id,$this->input->branch_id);
        $this->response($result,200);

    }
}