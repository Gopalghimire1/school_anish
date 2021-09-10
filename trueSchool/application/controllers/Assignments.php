<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assignments extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('dateConvert');
        $this->load->model('subject_model');
    }
    
    public function add(){
        // var_dump($_SESSION);die;
        if (!is_student_loggedin()) {
            access_denied();
        }
        if($_POST){
            if (is_superadmin_loggedin()) {
                $this->form_validation->set_rules('branch_id', translate('branch'), 'required');
            }
            $this->form_validation->set_rules('class_id', translate('class'), 'required');
            $this->form_validation->set_rules('section_id', translate('section'), 'required');
            $this->form_validation->set_rules('subject_id', translate('subject'), 'required');
            $this->form_validation->set_rules('title', translate('title'), 'required');
            $fileTmpName = $_FILES['attachment_file']['tmp_name'];
            $fileName = $_FILES['attachment_file']['name'];
            $fileExplode = explode('.',$fileName);
            $fileExt = strtoupper(array_pop($fileExplode));
            $fileLocation = './uploads/assignments/';
            $file_Name = date('ymdhis').rand(1111,9999);
            $file = $fileLocation.$file_Name.'.'.strtolower($fileExt);
            if($this->form_validation->run() !== false){
                $data['class_id'] = $this->input->post('class_id');
                $data['section_id'] = $this->input->post('section_id');
                $data['subject_id'] = $this->input->post('subject_id');
                $data['student_id'] = $this->session->userdata('loggedin_userid');
                $data['title'] = $this->input->post('title');
                $data['branch_id'] = $this->application_model->get_branch_id();
                if(move_uploaded_file($fileTmpName,$file)){
                    $data['file'] = $file_Name.'.'.strtolower($fileExt);
                }
                $this->db->insert('assignments',$data);
                set_alert('success', translate('information_has_been_updated_successfully'));
                $url    = base_url('assignments/add');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);exit;
        }
        $this->data['assignments'] = $this->db->where(array('student_id'=>$this->session->userdata('loggedin_userid')))->get('assignments')->result_array();
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['sub_page'] = 'assignments/add';
        $this->data['main_menu'] = 'assignments';
        $this->data['title'] = translate('assignment');
        $this->load->view('layout/index', $this->data);
    }
    
    public function submit(){
        $branchID = $this->application_model->get_branch_id();
        if ($_POST) {
            $classID = $this->input->post('class_id');
            $sectionID = $this->input->post('section_id');
            $subjectID = $this->input->post('subject_id');

            // $this->db->select('e.roll,s.*,c.name as category');
            // $this->db->from('enroll as e');
            // $this->db->join('student as s', 'e.student_id = s.id', 'inner');
            // $this->db->join('assignments as a', 'a.student_id = s.id', 'inner');
            // $this->db->join('student_category as c', 'c.id = s.category_id', 'left');
            // $this->db->where('e.class_id', $classID);
            // $this->db->where('e.section_id', $sectionID);
            // $this->db->where('e.branch_id', $branchID);
            // $this->db->group_by('a.student_id');
            $this->data['student'] =  $this->db->query('SELECT student.first_name, student.middle_name, student.last_name, enroll.roll, assignments.file FROM assignments left join enroll on enroll.student_id = assignments.student_id left join student on student.id = assignments.student_id where assignments.class_id ='.$classID.' AND assignments.section_id ='.$sectionID.' AND assignments.subject_id ='.$subjectID)->result_array();
            // var_dump($this->data['student']);die;
        }
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['sub_page'] = 'assignments/submit';
        $this->data['main_menu'] = 'assignments';
        $this->data['title'] = translate('submit').' '.translate('assignment');
        $this->load->view('layout/index', $this->data);
    }
}