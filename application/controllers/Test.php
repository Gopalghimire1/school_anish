<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('dateConvert');
        $this->load->model('subject_model');
    }
    
    public function mark_entry(){
        if (!is_superadmin_loggedin() && $this->session->userdata('loggedin_role_id') !== '3') {
            access_denied();
        }

        if($_POST){
            $branchID = $this->application_model->get_branch_id();
            $classID = $this->input->post('class_id');
            $sectionID = $this->input->post('section_id');
            $subjectID = $this->input->post('subject_id');
            $date = $this->input->post('date');
            if($this->session->userdata('date_type') === 'bs'){
                $nepDate = explode('-',nepaliToEnglish($this->input->post('date')));
                $dateConvert = new dateConvert();
                $engDate = $dateConvert->get_eng_date($nepDate['0'],$nepDate['1'],$nepDate['2']);
                $date = $engDate['y'].'-'.$engDate['m'].'-'.$engDate['d'];
            } else{
                $date = $this->input->post('date');
            }
            $this->db->select('en.*, st.first_name, st.last_name, st.register_no, st.category_id, t.marks as get_mark, t.name, t.pass_marks, t.full_marks,t.absent as get_abs, subject.name as subject_name');
            $this->db->from('enroll as en');
            $this->db->join('student as st', 'st.id = en.student_id', 'inner');
            $this->db->join('test as t', 't.student_id = en.student_id and t.class_id = en.class_id and t.section_id = en.section_id and t.date = ' . $this->db->escape($date) . ' and t.subject_id = ' . $this->db->escape($subjectID), 'left');
            $this->db->join('subject', 'subject.id = t.subject_id', 'left');
            $this->db->where('en.class_id', $classID);
            $this->db->where('en.section_id', $sectionID);
            $this->db->where('en.branch_id', $branchID);
            $this->db->where('en.session_id', get_session_id());
            $this->db->order_by('en.roll', 'ASC');
            $result = $this->db->get();
            $this->data['student'] = $result->result_array();
            $this->data['class_id'] = $classID;
            $this->data['subject_id'] = $subjectID;
            $this->data['section_id'] = $sectionID;
            $this->data['date'] = $date;
        }
        //var_dump($this->data['student']);die;
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['title'] = translate('test_master');
        $this->data['sub_page'] = 'test/mark_entry';
        $this->data['main_menu'] = 'test_mark';
        $this->load->view('layout/index', $this->data);
    }
   
    
    public function result(){
        if (!is_superadmin_loggedin() && $this->session->userdata('loggedin_role_id') !== '3') {
            access_denied();
        }
        if($_POST){
            $branchID = $this->application_model->get_branch_id();
            $this->form_validation->set_rules('class_id',translate('class'),'required|numeric');
            $this->form_validation->set_rules('section_id',translate('section'),'required|numeric');
            $this->form_validation->set_rules('subject_id',translate('subject'),'required');
            // var_dump($_POST);die;
            if ($this->form_validation->run() !== false) {
                $classID = $this->input->post('class_id');
                $sectionID = $this->input->post('section_id');
                $subjectID = $this->input->post('subject_id');
                if($this->input->post('result_type') === 'monthly'){
                    $month = $this->input->post('month');
                    $this->data['test_result'] = $this->db->query('SELECT DISTINCT(name),class_id,section_id,branch_id,subject_id from test where test.class_id = "'.$classID.'" and test.section_id = "'.$sectionID.'" and test.branch_id = "'.$branchID.'" and MONTH(date) = "'.$month.'"')->result_array();
                } elseif($this->input->post('result_type') === 'subject_wise'){
                    $this->data['test_result'] = $this->db->query('SELECT DISTINCT(name),class_id,section_id,branch_id,subject_id from test where test.subject_id = "'.$subjectID.'" and test.class_id = "'.$classID.'" and test.section_id = "'.$sectionID.'" and test.branch_id = "'.$branchID.'"')->result_array();
                } else{
                    $this->data['test_result'] = $this->db->query('SELECT DISTINCT(name),class_id,section_id,branch_id,subject_id from test where test.class_id = "'.$classID.'" and test.section_id = "'.$sectionID.'" and test.branch_id = "'.$branchID.'"')->result_array();
                }
                $this->data['students'] = $this->db->query('SELECT enroll.*, student.first_name, student.last_name, student.register_no, student.category_id, test.marks as get_mark, test.name, test.pass_marks, test.full_marks,test.absent as get_abs, test.date as test_date, subject.name as subject_name FROM `test` left join enroll on enroll.student_id = test.student_id left join student on student.id = test.student_id left join subject on subject.id = test.subject_id where test.class_id = "'.$classID.'" and test.section_id = "'.$sectionID.'" and test.branch_id = "'.$branchID.'"')->result_array();
                $this->data['query'] = $this->db->last_query();
                $this->data['result_type'] = $this->input->post('result_type');
            }
        }
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['title'] = translate('test_master');
        $this->data['sub_page'] = 'test/result';
        $this->data['main_menu'] = 'test';
        $this->load->view('layout/index', $this->data);        
    }
    public function testStudentResultModal(){
        echo $this->load->view('test/testStudentResultModal');
        die;
    }
    
    public function getStudentTestResults(){
        $name = $this->input->post('name');
        $class_id = $this->input->post('class_id');
        $section_id = $this->input->post('section_id');
        $subject_id = $this->input->post('subject_id');
        $branch_id = $this->input->post('branch_id');
        $students = $this->db->query('SELECT enroll.*, student.first_name, student.last_name, student.register_no, student.category_id, test.marks as get_mark, test.name, test.pass_marks, test.full_marks,test.absent as get_abs, test.date as test_date, subject.name as subject_name FROM `test` left join enroll on enroll.student_id = test.student_id left join student on student.id = test.student_id left join subject on subject.id = test.subject_id where test.name = "'.$name.'" and test.subject_id = "'.$subject_id.'" and test.class_id = "'.$class_id.'" and test.section_id = "'.$section_id.'" and test.branch_id = "'.$branch_id.'"')->result_array();
        // echo json_encode($students);die;
        $html = '<header class="panel-heading">	<h4 class="panel-title"><i class="fas fa-list-ul"></i>Student Results</h4></header>';
        $html += '<div class="pable-body">';
        $html += '<table>';
        $html += '<thead><tr><><><></tr></thead>';
        foreach($students as $student){
            
        }
        $html += '</table>';
        $html += '</div>';
        $html += '<footer class="panel-footer"><div class="text-right"><button class="btn btn-default modal-dismiss"><i class="fas fa-times"> close</i></button></div></footer>';
        echo $html;die;
    }
    
    public function mark_save(){
        if (!is_superadmin_loggedin() && $this->session->userdata('loggedin_role_id') !== '3') {
            ajax_access_denied();
        }
        $inputMarks = $this->input->post('mark');
        foreach ($inputMarks as $key => $value) {
            if (!isset($value['absent'])) {
                foreach ($value['assessment'] as $i => $row) {
                    $this->form_validation->set_rules('mark[' . $key . '][assessment][' . $i . ']', translate('mark'), 'trim|required|numeric');
                }
            }
        }
        if ($this->form_validation->run() !== false) {
            $name = $this->input->post('name');
            $classID = $this->input->post('class_id');
            $sectionID = $this->input->post('section_id');
            $subjectID = $this->input->post('subject_id');
            $branchID = $this->input->post('branch_id');
            $date = $this->input->post('date');
            $inputMarks = $this->input->post('mark');
            $fullMarks = $this->input->post('full_marks');
            $passMarks = $this->input->post('pass_marks');
            foreach ($inputMarks as $key => $value) {
                $assMark = array();
                foreach ($value['assessment'] as $i => $row) {
                    $assMark[$i] = $row;
                }
                $arrayMarks = array(
                    'name' => $name,
                    'student_id' => $value['student_id'],
                    'date' => $date,
                    'class_id' => $classID,
                    'section_id' => $sectionID,
                    'subject_id' => $subjectID,
                    'full_marks' => $fullMarks,
                    'pass_marks' => $passMarks,
                    'branch_id' => $branchID,
                    'session_id' => get_session_id()
                );
                $inputMark = (isset($value['absent']) ? null : array_pop($assMark));
                $absent = (isset($value['absent']) ? '1' : '0');
                $query = $this->db->get_where('test', $arrayMarks);
                if ($query->num_rows() > 0) {
                    $this->db->where('id', $query->row()->id);
                    $this->db->update('test', array('marks' => $inputMark, 'absent' => $absent,'updated_at' => date('Y-m-d h:i:s')));
                } else {
                    $arrayMarks['marks'] = $inputMark;
                    $arrayMarks['absent'] = $absent;
                    $this->db->insert('test', $arrayMarks);
                }
            }
            $message = translate('information_has_been_saved_successfully');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);die;
    }
    
    public function test_category(){
        if($_POST){
            $this->form_validation->set_rules('test_category','test_category','required');
            if($this->form_validation->run() !== false){
                $post = $this->input->post();
                $this->db->insert('test_category',$post);
                $message = translate('information_has_been_saved_successfully');
                $array = array('status' => 'success', 'message' => $message);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);die;
        }
        $this->data['test_category'] = $this->db->get('test_category')->result_array();
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['title'] = translate('test_category');
        $this->data['sub_page'] = 'test/test_category';
        $this->data['main_menu'] = 'test';
        $this->load->view('layout/index', $this->data);
    }
    
    public function test_category_delete($id = ''){
        $this->db->where('id', $id);
        $this->db->delete('test_category');    
    }
    
}