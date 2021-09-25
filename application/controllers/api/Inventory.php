<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Inventory extends Api {
    public function vendors_get(){
        $data = $this->db->get('vendor')->result_array();
        $this->response($data,200);
    }

    public function stockHistory_get(){
        // if(is_superadmin_loggedin()){
        //     if($_POST){
        //         $branch_id = $this->application_model->get_branch_id();
        //         $this->data['students'] = $this->db->query('select stock_discharge.date, student.id, student.first_name, student.middle_name, student.last_name, enroll.roll, item.item, class.name as class_name, section.name as section_name from enroll right join stock_discharge on stock_discharge.student_id = enroll.student_id inner join student on enroll.student_id = student.id left join item on item.id = stock_discharge.item_id left join section on section.id = enroll.section_id left join class on class.id = enroll.class_id where stock_discharge.branch_id='.$branch_id )->result_array();
        //     }
        // } else {
            $branch_id = $this->application_model->get_branch_id();
            $this->data['students'] = $this->db->query('select stock_discharge.date, student.id, student.first_name, student.middle_name, student.last_name, enroll.roll, item.item, class.name as class_name, section.name as section_name from enroll right join stock_discharge on stock_discharge.student_id = enroll.student_id inner join student on enroll.student_id = student.id left join item on item.id = stock_discharge.item_id left join section on section.id = enroll.section_id left join class on class.id = enroll.class_id' )->result_array();
        // }
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['title'] = translate('stock_history');
        $this->data['sub_page'] = 'accounting/stock_history';
        $this->data['main_menu'] = 'inventory';
        $this->response($this->data,200);
    }
}



// no change
