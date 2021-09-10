<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Timetable extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('dateConvert');
        $this->load->model('timetable_model');
    }

    public function index()
    {
        if (get_loggedin_id()) {
            redirect(base_url('timetable/view_classwise'));
        } else {
            redirect(base_url(), 'refresh');
        }
    }

    /* class timetable view page */
    public function viewclass()
    {
        if (!get_permission('class_timetable', 'is_view') && !$this->get_exam_privilege()) {
            access_denied();
        }

        $branchID = $this->application_model->get_branch_id();
        if ($_POST) {
            $classID = $this->input->post('class_id');
            $sectionID = $this->input->post('section_id');
            $arrayTimetable = array(
                'branch_id' => $branchID,
                'class_id' => $classID,
                'section_id' => $sectionID,
                'session_id' => get_session_id(),
            );
            $this->db->order_by('time_start', 'asc');
            $this->data['timetables'] = $this->db->get_where('timetable_class', $arrayTimetable)->result();
            $this->data['class_id'] = $classID;
            $this->data['section_id'] = $sectionID;
        }
        $this->data['branch_id'] = $branchID;
        $this->data['title'] = translate('class') . " " . translate('schedule');
        $this->data['sub_page'] = 'timetable/viewclass';
        $this->data['main_menu'] = 'timetable';
        $this->load->view('layout/index', $this->data);
    }

    /* class timetable view page */
    public function teacherview()
    {
        if (!get_permission('teacher_timetable', 'is_view') && !$this->get_exam_privilege()) {
            access_denied();
        }

        $branchID = $this->application_model->get_branch_id();
        if ($_POST) {
            $teacherID = $this->input->post('staff_id');
            $arrayTimetable = array(
                'branch_id' => $branchID,
                'teacher_id' => $teacherID,
                'session_id' => get_session_id(),
            );
            $this->db->order_by('time_start', 'asc');
            $this->data['timetables'] = $this->db->get_where('timetable_class', $arrayTimetable)->result();
        }
        $this->data['branch_id'] = $branchID;
        $this->data['title'] = translate('teacher') . " " . translate('schedule');
        $this->data['sub_page'] = 'timetable/teacherview';
        $this->data['main_menu'] = 'timetable';
        $this->load->view('layout/index', $this->data);
    }

    /* class timetable information are prepared and stored in the database here */
    public function set_classwise()
    {
        if (!get_permission('class_timetable', 'is_add') && !$this->get_exam_privilege()) {
            access_denied();
        }

        $branchID = $this->application_model->get_branch_id();
        if ($_POST) {
            $this->data['class_id'] = $this->input->post('class_id');
            $this->data['day'] = $this->input->post('day');
            $this->data['section_id'] = $this->input->post('section_id');
            $this->data['branch_id'] = $branchID;
            $this->data['exist_data'] = $this->timetable_model
            ->get('timetable_class', array('class_id' => $this->data['class_id'],
                'section_id' => $this->data['section_id'],
                'day' => $this->data['day'],
                'session_id' => get_session_id()), false, true);
        }
        $this->data['branch_id'] = $branchID;
        $this->data['title'] = translate('add') . " " . translate('schedule');
        $this->data['sub_page'] = 'timetable/set_classwise';
        $this->data['main_menu'] = 'timetable';
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/bootstrap-timepicker/css/bootstrap-timepicker.css',
            ),
            'js' => array(
                'vendor/bootstrap-timepicker/bootstrap-timepicker.js',
            ),
        );
        $this->load->view('layout/index', $this->data);
    }

    /* class timetable updating here */
    public function update_classwise()
    {

        if (!get_permission('class_timetable', 'is_edit') && !$this->get_exam_privilege()) {
            access_denied();
        }

        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['class_id'] = $this->input->post('class_id');
        $this->data['section_id'] = $this->input->post('section_id');
        $this->data['day'] = $this->input->post('day');
        $timetable_array = array(
            'branch_id' => $this->data['branch_id'],
            'class_id' => $this->data['class_id'],
            'section_id' => $this->data['section_id'],
            'day' => $this->data['day'],
            'session_id' => get_session_id(),
        );
        $this->db->order_by('time_start', 'asc');
        $this->data['timetables'] = $this->db->get_where('timetable_class', $timetable_array)->result();
        $this->data['title'] = translate('class') . " " . translate('schedule');
        $this->data['sub_page'] = 'timetable/update_classwise';
        $this->data['main_menu'] = 'timetable';
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/bootstrap-timepicker/css/bootstrap-timepicker.css',
            ),
            'js' => array(
                'vendor/bootstrap-timepicker/bootstrap-timepicker.js',
            ),
        );
        $this->load->view('layout/index', $this->data);
    }

    public function class_save($mode = '')
    {
        if ($_POST) {
            if (!get_permission('class_timetable', 'is_add') && !$this->get_exam_privilege()) {
                ajax_access_denied();
            }

            $items = $this->input->post('timetable');
            $this->form_validation->set_rules('class_id', translate('class'), 'trim|required');
            if (!empty($items)) {
                foreach ($items as $key => $value) {
                    $this->form_validation->set_rules('timetable[' . $key . '][time_start]', translate('starting_time'), 'required');
                    $this->form_validation->set_rules('timetable[' . $key . '][time_end]', translate('ending_time'), 'required');
                    if (!isset($value['break'])) {
                        $this->form_validation->set_rules('timetable[' . $key . '][subject]', translate('subject'), 'trim|required');
                        $this->form_validation->set_rules('timetable[' . $key . '][teacher]', translate('teacher'), 'trim|required');
                    }
                }
            }
            if ($this->form_validation->run() !== false) {
                $post = $this->input->post();
                $this->timetable_model->classwise_save($post, $mode);
                $message = translate('information_has_been_saved_successfully');
                $array = array('status' => 'success', 'message' => $message, 'error' => '');
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'url' => '', 'error' => $error);
            }
            echo json_encode($array);
        }
    }

    // exam timetable preview page
    public function viewexam()
    {
        if (!get_permission('exam_timetable', 'is_view') && !$this->get_exam_privilege()) {
            access_denied();
        }

        $branchID = $this->application_model->get_branch_id();
        if ($_POST) {
            $classID = $this->input->post('class_id');
            $sectionID = $this->input->post('section_id');
            $this->data['examlist'] = $this->timetable_model->getExamTimetableList($classID, $sectionID, $branchID);
        }
        $this->data['branch_id'] = $branchID;
        $this->data['title'] = translate('exam') . " " . translate('schedule');
        $this->data['sub_page'] = 'timetable/viewexam';
        $this->data['main_menu'] = 'exam_timetable';
        $this->load->view('layout/index', $this->data);
    }

    // exam timetable information are prepared and stored in the database here
    public function set_examwise()
    {
        if (!get_permission('exam_timetable', 'is_add') && !$this->get_exam_privilege()) {
            access_denied();
        }

        $branchID = $this->application_model->get_branch_id();
        if ($_POST) {
            $examID = $this->input->post('exam_id');
            $classID = $this->input->post('class_id');
            $sectionID = $this->input->post('section_id');
            $this->data['exam_id'] = $examID;
            $this->data['class_id'] = $classID;
            $this->data['section_id'] = $sectionID;
            $this->data['subjectassign'] = $this->timetable_model->getSubjectExam($classID, $sectionID, $examID, $branchID);
        }
        $this->data['branch_id'] = $branchID;
        $this->data['title'] = translate('add') . " " . translate('schedule');
        $this->data['sub_page'] = 'timetable/set_examwise';
        $this->data['main_menu'] = 'exam_timetable';
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/bootstrap-timepicker/css/bootstrap-timepicker.css',
            ),
            'js' => array(
                'vendor/bootstrap-timepicker/bootstrap-timepicker.js',
            ),
        );
        $this->load->view('layout/index', $this->data);
    }

    public function exam_create()
    {
        if (!get_permission('exam_timetable', 'is_add') && !$this->get_exam_privilege()) {
            ajax_access_denied();
        }
        if ($_POST) {
			// form validation rules
            $items = $this->input->post('timetable');
            foreach ($items as $key => $value) {
                $this->form_validation->set_rules('timetable[' . $key . '][date]', translate('date'), 'required');
                $this->form_validation->set_rules('timetable[' . $key . '][time_start]', translate('starting_time'), 'required');
                $this->form_validation->set_rules('timetable[' . $key . '][time_end]', translate('ending_time'), 'required');
                $this->form_validation->set_rules('timetable[' . $key . '][hall_id]', translate('hall_room'), 'required|callback_check_hallseat_capacity');
                foreach ($value['full_mark'] as $i => $id) {
                    $this->form_validation->set_rules('timetable[' . $key . '][full_mark][' . $i . ']', translate('full_mark'), 'required|numeric');
                    $this->form_validation->set_rules('timetable[' . $key . '][pass_mark][' . $i . ']', translate('pass_mark'), 'required|numeric');
                }
            }
            if ($this->form_validation->run() !== false) {
                $branchID = $this->application_model->get_branch_id();
                $examID = $this->input->post('exam_id');
                $classID = $this->input->post('class_id');
                $sectionID = $this->input->post('section_id');
                $timetable = $this->input->post('timetable');
                foreach ($timetable as $key => $value) {
					// distribution array
                    $distribution = array();
                    foreach ($value['full_mark'] as $id => $mark) {
                       $distribution[$id]['full_mark'] = $mark;

                    }
                    foreach ($value['pass_mark'] as $id => $mark) {
                       $distribution[$id]['pass_mark'] = $mark;

                    }
                    
                //convert nepali date to english if nepali
                if($this->session->userdata('date_type') === 'bs'){
                    $date = explode('-',nepaliToEnglish($value['date']));
                    $dateConvert = new DateConvert();
                    $date = $dateConvert->get_eng_date($date[0],$date[1],$date[2]);
                    $value['date'] = $date['y'].'-'.$date['m'].'-'.$date['d'];
                }
                    
                    $arrayData = array(
                        'exam_id' => $examID,
                        'class_id' => $classID,
                        'section_id' => $sectionID,
                        'subject_id' => $value['subject_id'],
                        'time_start' => $value['time_start'],
                        'time_end' => $value['time_end'],
                        'hall_id' => $value['hall_id'],
                        'exam_date' => $value['date'],
                        'mark_distribution' => json_encode($distribution),
                        'branch_id' => $branchID,
                        'session_id' => get_session_id(),
                    );
                    $this->db->where('exam_id', $examID);
                    $this->db->where('class_id', $classID);
                    $this->db->where('section_id', $sectionID);
                    $this->db->where('subject_id', $value['subject_id']);
                    $this->db->where('session_id', get_session_id());
                    $q = $this->db->get('timetable_exam');
                    if ($q->num_rows() > 0) {
                        $result = $q->row_array();
                        $this->db->where('id', $result['id']);
                        $this->db->update('timetable_exam', $arrayData);
                    } else {
                        $this->db->insert('timetable_exam', $arrayData);
                    }
                }
                $message = translate('information_has_been_saved_successfully');
                $array = array('status' => 'success', 'message' => $message);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
        }
    }

    public function exam_delete($examID, $classID, $sectionID)
    {
        if (get_permission('exam_timetable', 'is_delete') && !$this->get_exam_privilege()) {
            $this->db->where('exam_id', $examID);
            $this->db->where('class_id', $classID);
            $this->db->where('section_id', $sectionID);
            $this->db->where('session_id', get_session_id());
            if (!is_superadmin_loggedin()) {
                $this->db->where('branch_id', get_loggedin_branch_id());
            }
            $this->db->delete('timetable_exam');
        }
    }

    public function getExamTimetableM()
    {
        $examID = $this->input->post('exam_id');
        $classID = $this->input->post('class_id');
        $sectionID = $this->input->post('section_id');
        $this->data['exam_id'] = $examID;
        $this->data['class_id'] = $classID;
        $this->data['section_id'] = $sectionID;
        $this->data['timetables'] = $this->timetable_model->getExamTimetableByModal($examID, $classID, $sectionID);
        $this->load->view('timetable/examTimetableM', $this->data);
    }

    // check exam hall room capacity
    public function check_hallseat_capacity($hallid)
    {
        if ($hallid) {
            $classID = $this->input->post('class_id');
            $sectionID = $this->input->post('section_id');
            $seats = $this->db->get_where('exam_hall', array('id' => $hallid))->row()->seats;
            $stuCount = $this->db->get_where('enroll', array(
                'class_id' => $classID,
                'section_id' => $sectionID,
                'session_id' => get_session_id(),
            ))->num_rows();
            if ($stuCount > $seats) {
                $this->form_validation->set_message("check_hallseat_capacity", "The seats capacity is exceeded.");
                return false;
            } else {
                return true;
            }
        }
    }
    
    
    // -------------------------- assigning teacher exam privilege --------------------------------------
    public function get_exam_privilege(){
        $teacher_privilege_result = $this->db->query('SELECT teacher_id FROM teacher_exam_privilege')->result_array();
        if($teacher_privilege_result){
            foreach($teacher_privilege_result as $result){
                if($result['teacher_id'] === $this->session->userdata('loggedin_userid')){
                    return true;
                }
            }
        }
        return false;
    }
    
    // -------------------------- lesson planning --------------------------------------
    public function lesson_planning(){
        $branchID = $this->application_model->get_branch_id();
        
        if($_POST){
            if(is_superadmin_loggedin()){
                $this->form_validation->set_rules('branch_id',translate('branch'),'required');
            }
            $this->form_validation->set_rules('class_id',translate('class'),'required');
            $this->form_validation->set_rules('section_id',translate('section'),'required');
            if(!is_teacher_loggedin()){
                $this->form_validation->set_rules('staff_id',translate('teacher'),'required');
            }
            $this->form_validation->set_rules('subject_id',translate('subject'),'required');
            $this->form_validation->set_rules('topic',translate('topic'),'required');
            $this->form_validation->set_rules('start_date',translate('start_date'),'required');
            $this->form_validation->set_rules('end_date',translate('end_date'),'required');
            
            if($this->form_validation->run() !== false){
                $save['class_id'] = $this->input->post('class_id');
                $save['section_id'] = $this->input->post('section_id');
                if(is_teacher_loggedin()){
                    $save['teacher_id'] = get_loggedin_user_id();
                } else {
                    $save['teacher_id'] = $this->input->post('staff_id');
                }
                $save['subject_id'] = $this->input->post('subject_id');
                $save['topic'] = $this->input->post('topic');
                $save['start_date'] = $this->input->post('start_date');
                $save['end_date'] = $this->input->post('end_date');
                $save['branch_id'] = $branchID;
                $save['session_id'] = $_SESSION['set_session_id'];
                //convert nepali date to english if nepali
                if($this->session->userdata('date_type') === 'bs'){
                    $date = explode('-',nepaliToEnglish($save['start_date']));
                    $dateConvert = new DateConvert();
                    $date = $dateConvert->get_eng_date($date[0],$date[1],$date[2]);
                    $save['start_date'] = $date['y'].'-'.$date['m'].'-'.$date['d'];
                }
                if($this->session->userdata('date_type') === 'bs'){
                    $date = explode('-',nepaliToEnglish($save['end_date']));
                    $dateConvert = new DateConvert();
                    $date = $dateConvert->get_eng_date($date[0],$date[1],$date[2]);
                    $save['end_date'] = $date['y'].'-'.$date['m'].'-'.$date['d'];
                }
                if($this->db->insert('lesson_planning',$save)){
                    $message = translate('information_has_been_saved_successfully');
                    $array = array('status' => 'success', 'message' => $message);
                } else {
                    $message = translate('information_could_not_be_saved');
                    $array = array('status' => 'success', 'message' => $message);
                }
                set_alert('success', translate('information_has_been_updated_successfully'));
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);die;
        }
        $query = 'SELECT lesson_planning.id, lesson_planning.start_date, lesson_planning.end_date, lesson_planning.topic, lesson_planning.completed, branch.name as branch_name, class.name as class_name, section.name as section_name, staff.name as teacher_name, subject.name as subject_name FROM `lesson_planning`';
        $query .= ' left join class on class.id = lesson_planning.class_id ';
        $query .= ' left join section on section.id = lesson_planning.section_id ';
        $query .= ' left join staff on staff.id = lesson_planning.teacher_id ';
        $query .= ' left join subject on subject.id = lesson_planning.subject_id ';
        $query .= ' left join branch on branch.id = lesson_planning.branch_id ';
        if(is_teacher_loggedin()){
            $query .= ' where lesson_planning.teacher_id='. get_loggedin_id();
        } elseif(is_student_loggedin()) {
            $student_id = get_loggedin_user_id();
            $student_array = $this->db->get_where('enroll',array('student_id'=>$student_id))->result_array();
            $query .= ' where lesson_planning.class_id='.$student_array[0]['class_id'].' and lesson_planning.section_id='.$student_array[0]['section_id'];
        }
        $this->data['lesson_planning'] = $this->db->query($query)->result_array();

        $this->data['branch_id'] = $branchID;
        $this->data['title'] = translate('lesson') . " " . translate('planning');
        $this->data['sub_page'] = 'timetable/lesson_planning';
        $this->data['main_menu'] = 'timetable';
        $this->load->view('layout/index', $this->data);
    }
    
    public function lesson_planning_delete($id = ''){
        if (get_permission('exam_timetable', 'is_delete') || is_teacher_loggedin()) {
            $this->db->where('id', $id);
            $this->db->delete('lesson_planning');
        }
    }
    
    public function lesson_planning_edit($id = ''){
        if (!get_permission('exam_timetable', 'is_add') && !is_teacher_loggedin()) {
            access_denied();
        }
        if($_POST){
            $this->form_validation->set_rules('topic',translate('topic'),'required');
            $this->form_validation->set_rules('start_date',translate('start_date'),'required');
            $this->form_validation->set_rules('end_date',translate('end_date'),'required');            
            if($this->form_validation->run() !== false){
                $save['start_date'] = $this->input->post('start_date');
                $save['end_date'] = $this->input->post('end_date');
                //convert nepali date to english if nepali
                if($this->session->userdata('date_type') === 'bs'){
                    $date = explode('-',nepaliToEnglish($save['start_date']));
                    $dateConvert = new DateConvert();
                    $date = $dateConvert->get_eng_date($date[0],$date[1],$date[2]);
                    $save['start_date'] = $date['y'].'-'.$date['m'].'-'.$date['d'];
                }
                if($this->session->userdata('date_type') === 'bs'){
                    $date = explode('-',nepaliToEnglish($save['end_date']));
                    $dateConvert = new DateConvert();
                    $date = $dateConvert->get_eng_date($date[0],$date[1],$date[2]);
                    $save['end_date'] = $date['y'].'-'.$date['m'].'-'.$date['d'];
                }
                $save['topic'] = $this->input->post('topic');
                $id = $this->input->post('id');
                // var_dump($id);die;
                if($this->db->update('lesson_planning',$save,array('id'=>$id))){
                    set_alert('success', translate('information_has_been_updated_successfully'));
                } else {
                    set_alert('error','Could not be updated. Internal Error');
                }
                redirect('timetable/lesson_planning');
            }
            
        }
        $query = 'SELECT lesson_planning.id, lesson_planning.start_date, lesson_planning.end_date, lesson_planning.topic, lesson_planning.completed, branch.name as branch_name, class.name as class_name, section.name as section_name, staff.name as teacher_name, subject.name as subject_name FROM `lesson_planning`';
        $query .= ' left join class on class.id = lesson_planning.class_id ';
        $query .= ' left join section on section.id = lesson_planning.section_id ';
        $query .= ' left join staff on staff.id = lesson_planning.teacher_id ';
        $query .= ' left join subject on subject.id = lesson_planning.subject_id ';
        $query .= ' left join branch on branch.id = lesson_planning.branch_id ';
        $query .= ' where lesson_planning.id='.$id;
        
        $this->data['lesson_planning'] = $this->db->query($query)->result_array();
        $this->data['branch_id'] = $branchID;
        $this->data['title'] = translate('lesson') . " " . translate('planning') ." ". translate('edit');
        $this->data['sub_page'] = 'timetable/lesson_planning_edit';
        $this->data['main_menu'] = 'timetable';
        $this->load->view('layout/index', $this->data);
    }
    
    public function getTeacherByClassSection(){
        $class_id = $this->input->post('class_id');
        $section_id = $this->input->post('section_id');
        $where['timetable_class.class_id'] = $class_id;
        $where['timetable_class.section_id'] = $section_id;
        $where['timetable_class.session_id'] = $_SESSION['set_session_id'];
        $where['timetable_class.branch_id'] = $this->application_model->get_branch_id();
        $this->db->select('DISTINCT(staff.name),staff.id');
        $this->db->join('staff','staff.id = timetable_class.teacher_id');
        $this->db->where($where);
        $results = $this->db->get('timetable_class')->result_array();
        $html="";
        if($results){
            $html .= "<option selected disabled>Select</option>";
            foreach($results as $result){
                $html .="<option value='".$result['id']."'>".$result['name']."</option>"; 
            }
        } else {
            $html .= "<option selected disabled>No information available</option>";
        }
        echo json_encode($html);die;
    }
    
    public function getSubjectByTeacherClassSection(){
        $class_id = $this->input->post('class_id');
        $section_id = $this->input->post('section_id');
        if(is_teacher_loggedin()){
            $teacher_id = get_loggedin_user_id();
        } else {
            $teacher_id = $this->input->post('staff_id');
        }
        $where['timetable_class.class_id'] = $class_id;
        $where['timetable_class.section_id'] = $section_id;
        $where['timetable_class.teacher_id'] = $teacher_id;
        $where['timetable_class.session_id'] = $_SESSION['set_session_id'];
        $where['timetable_class.branch_id'] = $this->application_model->get_branch_id();
        $this->db->select('DISTINCT(subject.name),subject.id');
        $this->db->join('subject','subject.id = timetable_class.subject_id');
        $this->db->where($where);
        $results = $this->db->get('timetable_class')->result_array();
        $html="";
        if($results){
            $html .= "<option selected disabled>Select</option>";
            foreach($results as $result){
                $html .="<option value='".$result['id']."'>".$result['name']."</option>"; 
            }
        } else {
            $html .= "<option selected disabled>No information available</option>";
        }
        echo json_encode($html);die;
    }
        
    public function complete_lesson(){
        $id = $this->input->post('id');
        $result = $this->db->update('lesson_planning',array('completed'=>'1'),array('id'=>$id));
        echo json_encode($result);die;
    }
}
