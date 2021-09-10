<?php
defined('BASEPATH') or exit('No direct script access allowed');



class School_settings extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('school_model');
    }

    public function index()
    {
        if (!get_permission('school_settings', 'is_view')) {
            access_denied();
        }

        $branchID = $this->school_model->getBranchID();
        if ($_POST) {
            if (!get_permission('school_settings', 'is_edit')) {
                ajax_access_denied();
            }
            $this->form_validation->set_rules('branch_name', translate('branch_name'), 'trim|required|callback_unique_branchname');
            $this->form_validation->set_rules('school_name', translate('school_name'), 'trim|required');
            $this->form_validation->set_rules('email', translate('email'), 'trim|required|valid_email');
            $this->form_validation->set_rules('currency', translate('currency'), 'trim|required');
            $this->form_validation->set_rules('currency_symbol', translate('currency_symbol'), 'trim|required');

            if (isset($_POST['generate_student'])) {
                $this->form_validation->set_rules('stu_username_prefix', translate('username_prefix'), 'trim|required');
                $this->form_validation->set_rules('stu_default_password', translate('default_password'), 'trim|required');
            }

            if (isset($_POST['generate_guardian'])) {
                $this->form_validation->set_rules('grd_username_prefix', translate('username_prefix'), 'trim|required');
                $this->form_validation->set_rules('grd_default_password', translate('default_password'), 'trim|required');
            }

            if ($this->form_validation->run() == true) {
                $post = $this->input->post();
                $post['brance_id'] = $branchID;
                $this->school_model->branchUpdate($post);
                $id = $branchID;
                if (isset($_FILES["logo_file"]) && !empty($_FILES['logo_file']['name'])) {
                    $fileInfo = pathinfo($_FILES["logo_file"]["name"]);
                    $img_name = $id . '.' . $fileInfo['extension'];
                    move_uploaded_file($_FILES["logo_file"]["tmp_name"], "uploads/app_image/logo-" . $img_name);
                }
                if (isset($_FILES["text_logo"]) && !empty($_FILES['text_logo']['name'])) {
                    $fileInfo = pathinfo($_FILES["text_logo"]["name"]);
                    $img_name = $id . '.' . $fileInfo['extension'];
                    move_uploaded_file($_FILES["text_logo"]["tmp_name"], "uploads/app_image/logo-small-" . $img_name);
                }

                if (isset($_FILES["print_file"]) && !empty($_FILES['print_file']['name'])) {
                    $fileInfo = pathinfo($_FILES["print_file"]["name"]);
                    $img_name = $id . '.' . $fileInfo['extension'];
                    move_uploaded_file($_FILES["print_file"]["tmp_name"], "uploads/app_image/printing-logo-" . $img_name);
                }

                if (isset($_FILES["report_card"]) && !empty($_FILES['report_card']['name'])) {
                    $fileInfo = pathinfo($_FILES["report_card"]["name"]);
                    $img_name = $id . '.' . $fileInfo['extension'];
                    move_uploaded_file($_FILES["report_card"]["tmp_name"], "uploads/app_image/report-card-logo-" . $img_name);
                }

                $message = translate('the_configuration_has_been_updated');
                set_alert('success', $message);
                $array = array('status' => 'success');
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['branchID'] = $branchID;
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/dropify/css/dropify.min.css',
            ),
            'js' => array(
                'vendor/dropify/js/dropify.min.js',
            ),
        );
        $this->data['school'] = $this->school_model->get('branch', array('id' => $branchID), true);
        $this->data['title'] = translate('school_settings');
        $this->data['sub_page'] = 'school_settings/school';
        $this->data['main_menu'] = 'school_m';
        $this->load->view('layout/index', $this->data);
    }

    public function unique_branchname($name)
    {
        $branchID = $this->school_model->getBranchID();
        $this->db->where_not_in('id', $branchID);
        $this->db->where('name', $name);
        $name = $this->db->get('branch')->num_rows();
        if ($name == 0) {
            return true;
        } else {
            $this->form_validation->set_message("unique_branchname", translate('already_taken'));
            return false;
        }
    }

    public function payment()
    {
        if (!get_permission('payment_settings', 'is_view')) {
            access_denied();
        }

        $branchID = $this->school_model->getBranchID();
        $this->data['branch_id'] = $branchID;
        $this->data['config'] = $this->school_model->get('payment_config', array('branch_id' => $branchID), true);
        $this->data['sub_page'] = 'school_settings/payment_gateway';
        $this->data['main_menu'] = 'school_m';
        $this->data['title'] = translate('payment_control');
        $this->load->view('layout/index', $this->data);
    }

    public function smsconfig()
    {
        if (!get_permission('sms_settings', 'is_view')) {
            access_denied();
        }

        $branchID = $this->school_model->getBranchID();
        $this->data['branch_id'] = $branchID;
        $this->data['api'] = $this->school_model->getSmsConfig($branchID);
        $this->data['title'] = translate('sms_settings');
        $this->data['sub_page'] = 'school_settings/smsconfig';
        $this->data['main_menu'] = 'school_m';
        $this->load->view('layout/index', $this->data);
    }

    public function sms_active()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $providerID = $this->input->post('sms_service_provider');
        $this->db->where('branch_id', $branchID)->update('sms_credential', array('is_active' => 0));
        $this->db->where(array('sms_api_id' => $providerID,'branch_id' => $branchID))->update('sms_credential', array('is_active' => 1));
        if ($this->db->affected_rows() > 0) {
           $message = translate('information_has_been_saved_successfully'); 
        }else{
            $message = translate("SMS configuration not found"); 
        }
        $array = array('status' => 'success', 'message' => $message);
        echo json_encode($array);
    }

    public function twilio()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->form_validation->set_rules('twilio_sid', translate('account_sid'), 'trim|required');
        $this->form_validation->set_rules('twilio_auth_token', translate('authentication_token'), 'trim|required');
        $this->form_validation->set_rules('sender_number', translate('sender_number'), 'trim|required');
        if ($this->form_validation->run() !== false) {
            $arrayTwilio = array(
                'field_one' => $this->input->post('twilio_sid'),
                'field_two' => $this->input->post('twilio_auth_token'),
                'field_three' => $this->input->post('sender_number'),
            );
            $this->db->where('sms_api_id', 1);
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('sms_credential');
            if ($q->num_rows() == 0) {
                $arrayTwilio['sms_api_id'] = 1;
                $arrayTwilio['branch_id'] = $branchID;
                $this->db->insert('sms_credential', $arrayTwilio);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('sms_credential', $arrayTwilio);  
            }
            $message = translate('information_has_been_saved_successfully');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function clickatell()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->form_validation->set_rules('clickatell_user', translate('username'), 'trim|required');
        $this->form_validation->set_rules('clickatell_password', translate('password'), 'trim|required');
        $this->form_validation->set_rules('clickatell_api', translate('api_key'), 'trim|required');
        $this->form_validation->set_rules('sender_number', translate('sender_number'), 'trim|required');
        if ($this->form_validation->run() !== false) {
            $arrayTwilio = array(
                'field_one' => $this->input->post('clickatell_user'),
                'field_two' => $this->input->post('clickatell_password'),
                'field_three' => $this->input->post('clickatell_api'),
                'field_four' => $this->input->post('sender_number'),
            );
            $this->db->where('sms_api_id', 2);
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('sms_credential');
            if ($q->num_rows() == 0) {
                $arrayTwilio['sms_api_id'] = 2;
                $arrayTwilio['branch_id'] = $branchID;
                $this->db->insert('sms_credential', $arrayTwilio);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('sms_credential', $arrayTwilio);  
            }
            $message = translate('information_has_been_saved_successfully');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function msg91()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->form_validation->set_rules('msg91_auth_key', translate('authkey'), 'trim|required');
        $this->form_validation->set_rules('sender_id', translate('sender_id'), 'trim|required');
        if ($this->form_validation->run() !== false) {
            $arrayTwilio = array(
                'field_one' => $this->input->post('msg91_auth_key'),
                'field_two' => $this->input->post('sender_id'),
            );
            $this->db->where('sms_api_id', 3);
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('sms_credential');
            if ($q->num_rows() == 0) {
                $arrayTwilio['sms_api_id'] = 3;
                $arrayTwilio['branch_id'] = $branchID;
                $this->db->insert('sms_credential', $arrayTwilio);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('sms_credential', $arrayTwilio);  
            }
            $message = translate('information_has_been_saved_successfully');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function bulksms()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->form_validation->set_rules('bulk_sms_username', translate('username'), 'trim|required');
        $this->form_validation->set_rules('bulk_sms_password', translate('password'), 'trim|required');
        if ($this->form_validation->run() !== false) {
            $arrayTwilio = array(
                'field_one' => $this->input->post('bulk_sms_username'),
                'field_two' => $this->input->post('bulk_sms_password'),
            );
            $this->db->where('sms_api_id', 4);
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('sms_credential');
            if ($q->num_rows() == 0) {
                $arrayTwilio['sms_api_id'] = 4;
                $arrayTwilio['branch_id'] = $branchID;
                $this->db->insert('sms_credential', $arrayTwilio);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('sms_credential', $arrayTwilio);  
            }
            $message = translate('information_has_been_saved_successfully');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function textlocal()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->form_validation->set_rules('textlocal_username', translate('username'), 'trim|required');
        $this->form_validation->set_rules('textlocal_sender_id', translate('sender_name'), 'trim|required');
        $this->form_validation->set_rules('textlocal_hash_key', translate('hash_key'), 'trim|required');
        if ($this->form_validation->run() !== false) {
            $arrayTwilio = array(
                'field_one' => $this->input->post('textlocal_username'),
                'field_two' => $this->input->post('textlocal_sender_id'),
                'field_three' => $this->input->post('textlocal_hash_key'),
            );
            $this->db->where('sms_api_id', 5);
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('sms_credential');
            if ($q->num_rows() == 0) {
                $arrayTwilio['sms_api_id'] = 5;
                $arrayTwilio['branch_id'] = $branchID;
                $this->db->insert('sms_credential', $arrayTwilio);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('sms_credential', $arrayTwilio);  
            }
            $message = translate('information_has_been_saved_successfully');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function sms_country()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->form_validation->set_rules('username', translate('username'), 'trim|required');
        $this->form_validation->set_rules('password', translate('password'), 'trim|required');
        $this->form_validation->set_rules('sender_id', translate('sender_id'), 'trim|required');
        if ($this->form_validation->run() !== false) {
            $arraySMScountry = array(
                'field_one' => $this->input->post('username'),
                'field_two' => $this->input->post('password'),
                'field_three' => $this->input->post('sender_id'),
            );
            $this->db->where('sms_api_id', 6);
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('sms_credential');
            if ($q->num_rows() == 0) {
                $arraySMScountry['sms_api_id'] = 6;
                $arraySMScountry['branch_id'] = $branchID;
                $this->db->insert('sms_credential', $arraySMScountry);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('sms_credential', $arraySMScountry);  
            }
            $message = translate('information_has_been_saved_successfully');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function smstemplate()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->data['branch_id'] = $branchID;
        $this->data['templatelist'] = $this->app_lib->get_table('sms_template');
        $this->data['title'] = translate('sms_settings');
        $this->data['sub_page'] = 'school_settings/smstemplate';
        $this->data['main_menu'] = 'school_m';
        $this->load->view('layout/index', $this->data);
    }

    public function smsTemplateeSave()
    {
        if (!get_permission('sms_settings', 'is_add')) {
            access_denied();
        }
        $this->form_validation->set_rules('template_body', translate('body'), 'required');
        if ($this->form_validation->run() !== false) {
            $branchID = $this->school_model->getBranchID();
            $templateID = $this->input->post('template_id');
            $notify_student = isset($_POST['notify_student']) ? 1 : 0;
            $notify_parent = isset($_POST['notify_parent']) ? 1 : 0;
            $arrayTemplate = array(
                'notify_student' => $notify_student,
                'notify_parent' => $notify_parent,
                'template_body' => $this->input->post('template_body'),
                'template_id' => $templateID,
                'branch_id' => $branchID,
            );

            $this->db->where('template_id', $templateID);
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('sms_template_details');
            if ($q->num_rows() == 0) {
                $this->db->insert('sms_template_details', $arrayTemplate);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('sms_template_details', $arrayTemplate);  
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function emailconfig()
    {
        if (!get_permission('email_settings', 'is_view')) {
            access_denied();
        }
        if ($this->input->post('submit') == 'update') {
            $data = array();
            foreach ($this->input->post() as $key => $value) {
                if ($key == 'submit') {
                    continue;
                }
                $data[$key] = $value;
            }
            $this->db->where('id', 1);
            $this->db->update('email_config', $data);
            set_alert('success', translate('the_configuration_has_been_updated'));
            redirect(base_url('mailconfig/email'));
        }
        $branchID = $this->school_model->getBranchID();
        $this->data['config'] = $this->school_model->get('email_config', array('branch_id' => $branchID), true);
        $this->data['title'] = translate('email_settings');
        $this->data['sub_page'] = 'school_settings/emailconfig';
        $this->data['main_menu'] = 'school_m';
        $this->load->view('layout/index', $this->data);
    }

    public function saveEmailConfig()
    {
        if (!get_permission('email_settings', 'is_add')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $protocol = $this->input->post('protocol');
        $this->form_validation->set_rules('email', 'System Email', 'trim|required');
        $this->form_validation->set_rules('protocol', 'Email Protocol', 'trim|required');
        if ($protocol == 'smtp') {
            $this->form_validation->set_rules('smtp_host', 'SMTP Host', 'trim|required');
            $this->form_validation->set_rules('smtp_user', 'SMTP Username', 'trim|required');
            $this->form_validation->set_rules('smtp_pass', 'SMTP Password', 'trim|required');
            $this->form_validation->set_rules('smtp_port', 'SMTP Port', 'trim|required');
            $this->form_validation->set_rules('smtp_encryption', 'Email Encryption', 'trim|required');
        }
        if($this->form_validation->run() !== false) {
            $arrayConfig = array(
                'email' => $this->input->post('email'), 
                'protocol' => $protocol, 
                'branch_id' => $branchID, 
            );
            if ($protocol == 'smtp') {
                $arrayConfig['smtp_host'] = $this->input->post("smtp_host"); 
                $arrayConfig['smtp_user'] = $this->input->post("smtp_user"); 
                $arrayConfig['smtp_pass'] = $this->input->post("smtp_pass"); 
                $arrayConfig['smtp_port'] = $this->input->post("smtp_port"); 
                $arrayConfig['smtp_encryption'] = $this->input->post("smtp_encryption"); 
            }
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('email_config');
            if ($q->num_rows() == 0) {
                $this->db->insert('email_config', $arrayConfig);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('email_config', $arrayConfig);  
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function emailtemplate()
    {
        if (!get_permission('email_settings', 'is_view')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->data['branch_id'] = $branchID;
        $this->data['templatelist'] = $this->app_lib->get_table('email_templates');
        $this->data['title'] = translate('email_settings');
        $this->data['sub_page'] = 'school_settings/emailtemplate';
        $this->data['main_menu'] = 'school_m';
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/summernote/summernote.css',
            ),
            'js' => array(
                'vendor/summernote/summernote.js',
            ),
        );
        $this->load->view('layout/index', $this->data);
    }

    function emailTemplateSave()
    {
        if (!get_permission('email_settings', 'is_add')) {
            access_denied();
        }
        $this->form_validation->set_rules('subject', translate('subject'), 'required');
        $this->form_validation->set_rules('template_body', translate('body'), 'required');
        if ($this->form_validation->run() !== false) {
            $branchID = $this->application_model->get_branch_id();
            $notified = isset($_POST['notify_enable']) ? 1 : 0;
            $templateID = $this->input->post('template_id');
            $arrayTemplate = array(
                'template_id' => $templateID,
                'subject' => $this->input->post('subject'),
                'template_body' => $this->input->post('template_body'),
                'notified' => $notified,
                'branch_id' => $branchID,
            );

            $this->db->where('template_id', $templateID);
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('email_templates_details');
            if ($q->num_rows() == 0) {
                $this->db->insert('email_templates_details', $arrayTemplate);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('email_templates_details', $arrayTemplate);  
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    // transactions links enable / disabled
    public function accounting_links()
    {
        // check access permission
        if (!get_permission('accounting_links', 'is_view')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->data['branch_id'] = $branchID;
        $this->data['transactions'] = $this->school_model->get('transactions_links', array('branch_id' => $branchID), true);
        $this->data['sub_page'] = 'school_settings/accounting_links';
        $this->data['main_menu'] = 'school_m';
        $this->data['title'] = translate('accounting_links');
        $this->load->view('layout/index', $this->data);
    }

    public function accountingLinksSave()
    {
        // check access permission
        if (!get_permission('accounting_links', 'is_edit')) {
            ajax_access_denied();
        }
        if (isset($_POST['status'])) {
            $this->form_validation->set_rules('deposit', translate('deposit'), 'trim|required');
            $this->form_validation->set_rules('expense', translate('expense'), 'trim|required');
        }
        $this->form_validation->set_rules('status', translate('status'), 'trim');
        if ($this->form_validation->run() !== false) {
            $branchID = $this->school_model->getBranchID();
            $array = array();
            if (isset($_POST['status'])) {
                $array['status'] = 1;
                $array['deposit'] = $this->input->post('deposit');
                $array['expense'] = $this->input->post('expense'); 
            } else {
                $array['status'] = 0;
            }
            $array['branch_id'] = $branchID;
            $this->db->where('branch_id', $branchID);
            $query = $this->db->get('transactions_links');
            if ($query->num_rows() > 0) {
                $this->db->where('id', $query->row()->id);
                $this->db->update('transactions_links', $array);
            } else {
                $this->db->insert('transactions_links', $array);
            }  
            
            $array = array('status' => 'success' , 'message' => translate('information_has_been_saved_successfully'));
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function live_class_config()
    {
        // check access permission
        if (!get_permission('live_class_config', 'is_view')) {
            access_denied();
        }
        $branchID = $this->school_model->getBranchID();
        $this->data['branch_id'] = $branchID;
        $this->data['config'] = $this->school_model->get('live_class_config', array('branch_id' => $branchID), true);
        $this->data['sub_page'] = 'school_settings/live_class_config';
        $this->data['main_menu'] = 'school_m';
        $this->data['title'] = translate('live_class') . " " . translate('settings');
        $this->load->view('layout/index', $this->data);
    }

    public function liveClassSave()
    {
        // check access permission
        if (!get_permission('live_class_config', 'is_edit')) {
            ajax_access_denied();
        }
        $method = $this->input->post('method');
        if ($method == 'zoom') {
            $this->form_validation->set_rules('zoom_api_key', "Zoom API Key", 'trim|required');
            $this->form_validation->set_rules('zoom_api_secret', "Zoom API Secret", 'trim|required');
            if ($this->form_validation->run() !== false) {
                $branchID = $this->school_model->getBranchID();
                $array = array(
                    'zoom_api_key' => $this->input->post('zoom_api_key'),
                    'zoom_api_secret' => $this->input->post('zoom_api_secret'),
                    'staff_api_credential' => !empty($this->input->post('staff_api_credential')) ? 1 : 0,
                    'student_api_credential' => !empty($this->input->post('student_api_credential')) ? 1 : 0,
                    'branch_id' => $branchID,
                );
                $this->db->where('branch_id', $branchID);
                $query = $this->db->get('live_class_config');
                if ($query->num_rows() > 0) {
                    $this->db->where('id', $query->row()->id);
                    $this->db->update('live_class_config', $array);
                } else {
                    $this->db->insert('live_class_config', $array);
                }  
                $array = array('status' => 'success' , 'message' => translate('information_has_been_saved_successfully'));
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
        } elseif ($method == 'bbb') {
            $this->form_validation->set_rules('bbb_salt_key', "Salt Key", 'trim|required');
            $this->form_validation->set_rules('bbb_server_base_url', "Server Base URL", 'trim|required');
            if ($this->form_validation->run() !== false) {
                $branchID = $this->school_model->getBranchID();
                $server_base_url = $this->input->post('bbb_server_base_url');
                if (substr($server_base_url, strlen($server_base_url) - 1, 1) != '/') {
                    $server_base_url .= '/';
                }
                $array = array(
                    'bbb_salt_key' => $this->input->post('bbb_salt_key'),
                    'bbb_server_base_url' => $server_base_url,
                    'branch_id' => $branchID,
                );
                $this->db->where('branch_id', $branchID);
                $query = $this->db->get('live_class_config');
                if ($query->num_rows() > 0) {
                    $this->db->where('id', $query->row()->id);
                    $this->db->update('live_class_config', $array);
                } else {
                    $this->db->insert('live_class_config', $array);
                }  
                $array = array('status' => 'success' , 'message' => translate('information_has_been_saved_successfully'));
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
        } 
        echo json_encode($array);
    }

}
