<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : TrueSchool Management System
 * @developed by : KushmiTech
 * @support : kushmitech@gmail.com
 * @author url : https://trueemic.com
 * @filename : Accounting.php
 */

class Accounting extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('dateConvert');
        $this->load->model('accounting_model');
        $this->load->model('email_model');
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/daterangepicker/daterangepicker.css',
            ),
            'js' => array(
                'vendor/moment/moment.js',
                'vendor/daterangepicker/daterangepicker.js',
            ),
        );
    }

    /* account form validation rules */
    protected function account_validation()
    {
        if (is_superadmin_loggedin()) {
            $this->form_validation->set_rules('branch_id', translate('branch'), 'required');
        }
        $this->form_validation->set_rules('account_name', translate('account_name'), array('trim','required',array('unique_account_name',
        array($this->accounting_model, 'unique_account_name'))));
        $this->form_validation->set_rules('opening_balance', translate('opening_balance'), 'trim|numeric');
    }

    // add new account for office accounting
    public function index()
    {
        // check access permission
        if (!get_permission('account', 'is_view')) {
            access_denied();
        }
        if ($_POST) {
            if (!get_permission('account', 'is_add')) {
                access_denied();
            }
            $this->account_validation();
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                $this->accounting_model->saveAccounts($data);
                set_alert('success', translate('information_has_been_saved_successfully'));
                $url    = $_SERVER['HTTP_REFERER'];
                $array  = array('status' => 'success');
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['accountslist'] =  $this->app_lib->getTable('accounts');
        $this->data['sub_page'] = 'accounting/index';
        $this->data['main_menu'] = 'accounting';
        $this->data['title'] = translate('office_accounting');
        $this->load->view('layout/index', $this->data);
    }

    // update existing account if passed id
    public function edit($id = '')
    {
        if (!get_permission('account', 'is_edit')) {
            access_denied();
        }
        if ($_POST) {
            $this->account_validation();
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                $this->accounting_model->saveAccounts($data);
                set_alert('success', translate('information_has_been_updated_successfully'));
                $url    = base_url('accounting');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['account'] = $this->app_lib->getTable('accounts', array('t.id' => $id), true);
        $this->data['sub_page'] = 'accounting/edit';
        $this->data['main_menu'] = 'accounting';
        $this->data['title'] = translate('office_accounting');
        $this->load->view('layout/index', $this->data);
    }

    // delete account from database
    public function delete($id = '')
    {
        if (!get_permission('account', 'is_delete')) {
            access_denied();
        }
        if (!is_superadmin_loggedin()) {
            $this->db->where('branch_id', get_loggedin_branch_id());
        }
        $this->db->where('id', $id);
        $this->db->delete('accounts');
        if ($this->db->affected_rows() > 0) {
            $this->db->where('account_id', $id);
            $this->db->delete('transactions');
        }
    }

    // add new voucher head for voucher
    public function voucher_head()
    {
        if ($_POST) {
            if (!get_permission('voucher_head', 'is_add')) {
                access_denied();
            }
            if (is_superadmin_loggedin()) {
                $this->form_validation->set_rules('branch_id', translate('branch'), 'required');
            }
            $this->form_validation->set_rules('voucher_head', translate('name'), array('trim', 'required',
            array('unique_voucher_head', array($this->accounting_model, 'unique_voucher_head'))));
            $this->form_validation->set_rules('type', translate('type'), 'trim|required');
            if ($this->form_validation->run() !== false) {
                $arrayHead = array(
                    'branch_id' => $this->application_model->get_branch_id(),
                    'name' => $this->input->post('voucher_head'),
                    'type' => $this->input->post('type'),
                );
                $this->db->insert('voucher_head', $arrayHead);
                set_alert('success', translate('information_has_been_saved_successfully'));
                redirect(current_url());
            }
        }
        $this->data['productlist'] = $this->app_lib->getTable('voucher_head', array('system' => 0));
        $this->data['title'] = translate('office_accounting');
        $this->data['sub_page'] = 'accounting/voucher_head';
        $this->data['main_menu'] = 'accounting';
        $this->load->view('layout/index', $this->data);
    }

    // update existing voucher head if passed id
    public function voucher_head_edit()
    {
        if ($_POST) {
            if (!get_permission('voucher_head', 'is_edit')) {
                ajax_access_denied();
            }
            if (is_superadmin_loggedin()) {
                $this->form_validation->set_rules('branch_id', translate('branch'), 'required');
            }
            $this->form_validation->set_rules('voucher_head', translate('name'), array('trim', 'required', array('unique_voucher_head',
            array($this->accounting_model, 'unique_voucher_head'))));
            if ($this->form_validation->run() !== false) {
                $voucher_head_id = $this->input->post('voucher_head_id');
                $arrayHead = array(
                    'name' => $this->input->post('voucher_head'),
                );
                $this->db->where('id', $voucher_head_id);
                $this->db->update('voucher_head', $arrayHead);
                set_alert('success', translate('information_has_been_updated_successfully'));
                $url    = base_url('accounting/voucher_head');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
        }
    }

    public function voucherHeadDetails()
    {
        if (get_permission('voucher_head', 'is_edit')) {
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $query = $this->db->get('voucher_head');
            $result = $query->row_array();
            echo json_encode($result);
        }
    }

    // delete voucher head from database
    public function voucher_head_delete($id)
    {
        if (!get_permission('voucher_head', 'is_delete')) {
            access_denied();
        }
        if (!is_superadmin_loggedin()) {
            $this->db->where('branch_id', get_loggedin_branch_id());
        }
        $this->db->where('id', $id);
        $this->db->delete('voucher_head');
    }

    // this function is used to add voucher data
    public function voucher_deposit()
    {
        if (!get_permission('deposit', 'is_view')) {
            access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->data['branch_id'] = $branchID;
        $this->data['voucherlist'] = $this->accounting_model->getVoucherList('deposit');
        $this->data['sub_page'] = 'accounting/voucher_deposit';
        $this->data['main_menu'] = 'accounting';
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/dropify/css/dropify.min.css',
            ),
            'js' => array(
                'vendor/dropify/js/dropify.min.js',
            ),
        );
        $this->data['title'] = translate('office_accounting');
        $this->load->view('layout/index', $this->data);
    }

    // this function is used to add voucher data
    public function voucher_expense()
    {
        if (!get_permission('expense', 'is_view')) {
            access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->data['branch_id'] = $branchID;
        $this->data['voucherlist'] = $this->accounting_model->getVoucherList('expense');
        $this->data['sub_page'] = 'accounting/voucher_expense';
        $this->data['main_menu'] = 'accounting';
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/dropify/css/dropify.min.css',
            ),
            'js' => array(
                'vendor/dropify/js/dropify.min.js',
            ),
        );
        $this->data['title'] = translate('office_accounting');
        $this->load->view('layout/index', $this->data);
    }

    public function voucher_save()
    {
        if ($_POST) {
            $type = $this->input->post('voucher_type');
            if ($type == 'deposit') {
                if (!get_permission('deposit', 'is_add')) {
                    ajax_access_denied();
                }
            }
            if ($type == 'expense') {
                if (!get_permission('expense', 'is_add')) {
                    ajax_access_denied();
                }
            }
            if (is_superadmin_loggedin()) {
                $this->form_validation->set_rules('branch_id', translate('branch'), 'required');
            }
            $this->form_validation->set_rules('account_id', translate('account'), 'trim|required');
            $this->form_validation->set_rules('voucher_head_id', translate('voucher_head'), 'trim|required');
            $this->form_validation->set_rules('amount', translate('amount'), 'trim|required|numeric');
            $this->form_validation->set_rules('date', translate('date'), 'trim|required|callback_get_valid_date');
            if ($this->form_validation->run() !== false) {
                $post = $this->input->post();
                //save data into table
                $insert_id = $this->accounting_model->saveVoucher($post);
                if (isset($_FILES["attachment_file"]) && !empty($_FILES['attachment_file']['name'])) {
                    $ext = pathinfo($_FILES["attachment_file"]["name"], PATHINFO_EXTENSION);
                    $file_name = $insert_id . '.' . $ext;
                    move_uploaded_file($_FILES["attachment_file"]["tmp_name"], "./uploads/attachments/voucher/" . $file_name);
                    $this->db->where('id', $insert_id);
                    $this->db->update('transactions', array('attachments' => $file_name));
                }
                set_alert('success', translate('information_has_been_saved_successfully'));
                $array  = array('status' => 'success',  'error' => '');
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
        }
    }

    public function all_transactions()
    {
        if (!get_permission('all_transactions', 'is_view')) {
            access_denied();
        }

        $this->data['voucherlist'] = $this->accounting_model->getVoucherList();
        $this->data['sub_page'] = 'accounting/all_transactions';
        $this->data['main_menu'] = 'accounting';
        $this->data['title'] = translate('office_accounting');
        $this->load->view('layout/index', $this->data);
    }


    // this function is used to voucher data update
    public function voucher_deposit_edit($id = '')
    {
        if (!get_permission('deposit', 'is_edit')) {
            access_denied();
        }
        if ($_POST) {
            $this->form_validation->set_rules('voucher_head_id', translate('voucher_head'), 'trim|required');
            $this->form_validation->set_rules('date', translate('date'), 'trim|required');
            if ($this->form_validation->run() !== false) {
                $post = $this->input->post();
                // update data into table
                $insert_id = $this->accounting_model->voucherEdit($post);
                set_alert('success', translate('information_has_been_updated_successfully'));
                $url    = base_url('accounting/voucher_deposit');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['deposit'] = $this->app_lib->getTable('transactions', array('t.id' => $id), true);
        $this->data['sub_page'] = 'accounting/voucher_deposit_edit';
        $this->data['main_menu'] = 'accounting';
        $this->data['title'] = translate('office_accounting');
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/dropify/css/dropify.min.css',
            ),
            'js' => array(
                'vendor/dropify/js/dropify.min.js',
            ),
        );
        $this->load->view('layout/index', $this->data);
    }

    // this function is used to voucher data update
    public function voucher_expense_edit($id = '')
    {
        if (!get_permission('expense', 'is_edit')) {
            access_denied();
        }
        if ($_POST) {
            $this->form_validation->set_rules('voucher_head_id', translate('voucher_head'), 'trim|required');
            $this->form_validation->set_rules('date', translate('date'), 'trim|required');
            if ($this->form_validation->run() !== false) {
                $post = $this->input->post();
                // update data into table
                $insert_id = $this->accounting_model->voucherEdit($post);
                set_alert('success', translate('information_has_been_updated_successfully'));
                $url    = base_url('accounting/voucher_expense');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['expense'] = $this->app_lib->getTable('transactions', array('t.id' => $id), true);
        $this->data['sub_page'] = 'accounting/voucher_expense_edit';
        $this->data['main_menu'] = 'accounting';
        $this->data['title'] = translate('office_accounting');
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/dropify/css/dropify.min.css',
            ),
            'js' => array(
                'vendor/dropify/js/dropify.min.js',
            ),
        );
        $this->load->view('layout/index', $this->data);
    }

    // delete into voucher table by voucher id
    public function voucher_delete($id)
    {
        $q = $this->db->where('id', $id)->get('transactions')->row_array();
        if ($q['type'] == 'expense') {
            if (!get_permission('expense', 'is_delete')) {
                access_denied();
            }
            $sql = "UPDATE accounts SET balance = balance + " . $q['amount'] . " WHERE id = " . $this->db->escape($q['account_id']);
            $this->db->query($sql);
        } elseif ($q['type'] == 'deposit') {
            if (!get_permission('deposit', 'is_delete')) {
                access_denied();
            }
            $sql = "UPDATE accounts SET balance = balance - " . $q['amount'] . " WHERE id = " . $this->db->escape($q['account_id']);
            $this->db->query($sql);
        }
        $filepath = FCPATH . 'uploads/attachments/voucher/' . $q['attachments'];
        if (file_exists($filepath)) {
            unlink($filepath);
        }
        $this->db->where('id', $id);
        $this->db->delete('transactions');
    }

    // account statement by date to date
    public function account_statement()
    {
        if (!get_permission('accounting_reports', 'is_view')) {
            access_denied();
        }
        if ($_POST) {
            $account_id = $this->input->post('account_id');
            $type = $this->input->post('type');
            $daterange = explode(' - ', $this->input->post('daterange'));
            $start = date("Y-m-d", strtotime($daterange[0]));
            $end = date("Y-m-d", strtotime($daterange[1]));
            $this->data['daterange'] = $daterange;
            $this->data['results'] = $this->accounting_model->getStatementReport($account_id, $type, $start, $end);
        }
        $this->data['title'] = translate('financial_reports');
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['sub_page'] = 'accounting/account_statement';
        $this->data['main_menu'] = 'accounting_repots';
        $this->load->view('layout/index', $this->data);
    }

    // income repots by date to date
    public function income_repots()
    {
        if (!get_permission('accounting_reports', 'is_view')) {
            access_denied();
        }
        if ($_POST) {
            $branchID = $this->application_model->get_branch_id();
            $daterange = explode(' - ', $this->input->post('daterange'));
            $start = date("Y-m-d", strtotime($daterange[0]));
            $end = date("Y-m-d", strtotime($daterange[1]));
            $this->data['daterange'] = $daterange;
            $this->data['results'] = $this->accounting_model->getIncomeExpenseRepots($branchID, $start, $end, 'deposit');
        }
        $this->data['title'] = translate('financial_reports');
        $this->data['sub_page'] = 'accounting/income_repots';
        $this->data['main_menu'] = 'accounting_repots';
        $this->load->view('layout/index', $this->data);
    }

    public function expense_repots()
    {
        if (!get_permission('accounting_reports', 'is_view')) {
            access_denied();
        }
        if ($_POST) {
            $branchID = $this->application_model->get_branch_id();
            $daterange = explode(' - ', $this->input->post('daterange'));
            $start = date("Y-m-d", strtotime($daterange[0]));
            $end = date("Y-m-d", strtotime($daterange[1]));
            $this->data['daterange'] = $daterange;
            $this->data['results'] = $this->accounting_model->getIncomeExpenseRepots($branchID, $start, $end, 'expense');
        }
        $this->data['title'] = translate('financial_reports');
        $this->data['sub_page'] = 'accounting/expense_repots';
        $this->data['main_menu'] = 'accounting_repots';
        $this->load->view('layout/index', $this->data);
    }

    // account balance sheet
    public function balance_sheet()
    {
        if (!get_permission('accounting_reports', 'is_view')) {
            access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->data['branch_id'] = $branchID;
        $this->data['results'] = $this->accounting_model->get_balance_sheet($branchID);
        $this->data['title'] = translate('financial_reports');
        $this->data['sub_page'] = 'accounting/balance_sheet';
        $this->data['main_menu'] = 'accounting_repots';
        $this->load->view('layout/index', $this->data);
    }

    // income vs expense repots by date to date
    public function incomevsexpense()
    {
        if (!get_permission('accounting_reports', 'is_view')) {
            access_denied();
        }
        if ($_POST) {
            $branchID = $this->application_model->get_branch_id();
            $daterange = explode(' - ', $this->input->post('daterange'));
            $start = date("Y-m-d", strtotime($daterange[0]));
            $end = date("Y-m-d", strtotime($daterange[1]));
            $this->data['daterange'] = $daterange;
            $this->data['results'] = $this->accounting_model->get_incomevsexpense($branchID, $start, $end);
        }
        $this->data['title'] = translate('financial_reports');
        $this->data['sub_page'] = 'accounting/income_vs_expense';
        $this->data['main_menu'] = 'accounting_repots';
        $this->load->view('layout/index', $this->data);
    }

    public function transitions_repots()
    {
        if (!get_permission('accounting_reports', 'is_view')) {
            access_denied();
        }
        if ($_POST) {
            $branchID = $this->application_model->get_branch_id();
            $daterange = explode(' - ', $this->input->post('daterange'));
            $start = date("Y-m-d", strtotime($daterange[0]));
            $end = date("Y-m-d", strtotime($daterange[1]));
            $this->data['daterange'] = $daterange;
            $this->data['results'] = $this->accounting_model->getTransitionsRepots($branchID, $start, $end);
        }

        $this->data['title'] = translate('financial_reports');
        $this->data['sub_page'] = 'accounting/transitions_repots';
        $this->data['main_menu'] = 'accounting_repots';
        $this->load->view('layout/index', $this->data);
    }

    public function getVoucherHead()
    {
        $html = "";
        $branch_id = $this->application_model->get_branch_id();
        $type = $this->input->post('type');
        if (!empty($branch_id)) {
            $result = $this->db->select('id,name')->where(array('branch_id' => $branch_id, 'type' => $type))->get('voucher_head')->result_array();
            if (count($result)) {
                $html .= "<option value=''>" . translate('select') . "</option>";
                foreach ($result as $row) {
                    $html .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                }
            } else {
                $html .= '<option value="">' . translate('no_information_available') . '</option>';
            }
        } else {
            $html .= '<option value="">' . translate('select_branch_first') . '</option>';
        }
        echo $html;
    }

    public function get_valid_date($date)
    {
        $present_date = date('Y-m-d');
        $date = date("Y-m-d", strtotime($date));
        if ($date > $present_date) {
            $this->form_validation->set_message("get_valid_date", "Please Enter Correct Date");
            return false;
        } else {
            return true;
        }
    }
    // vendor
    public function vendor(){
        if (!get_permission('account', 'is_view')) {
            access_denied();
        }
        if($_POST){
            $this->form_validation->set_rules('name',translate('name'),'required');
            $this->form_validation->set_rules('phone[]',translate('phone'),'required');
            $this->form_validation->set_rules('address1',translate('address1'),'required');
            $this->form_validation->set_rules('email',translate('email'),'required');
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                $save['branch_id'] = $this->application_model->get_branch_id();
                $save['name'] = $data['name'];
                $save['phone'] = json_encode($data['phone']);
                $save['address1'] = $data['address1'];
                $save['address2'] = $data['address2'];
                $save['email'] = $data['email'];
                $result = $this->db->insert('vendor',$save);
                set_alert('success', translate('information_has_been_saved_successfully'));
                $url    = base_url('accounting/vendor');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->db->select('vendor.*, branch.name as branch_name');
        $this->db->join('branch','branch_id = vendor.branch_id');
        $this->data['vendorlist'] = $this->db->get('vendor')->result_array();
        $this->data['title'] = translate('vendor');
        $this->data['sub_page'] = 'accounting/vendor';
        $this->data['main_menu'] = 'inventory';
        $this->load->view('layout/index', $this->data);
    }
    
    public function vendor_edit($id=''){
        if (!get_permission('account', 'is_view')) {
            access_denied();
        }
        if($_POST){
            $this->form_validation->set_rules('name',translate('name'),'required');
            $this->form_validation->set_rules('phone[]',translate('phone'),'required');
            $this->form_validation->set_rules('address1',translate('address1'),'required');
            $this->form_validation->set_rules('email',translate('email'),'required');
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                $edit['branch_id'] = $this->application_model->get_branch_id();
                $edit['name'] = $data['name'];
                $edit['phone'] = json_encode($data['phone']);
                $edit['address1'] = $data['address1'];
                $edit['address2'] = $data['address2'];
                $edit['email'] = $data['email'];
                $id = $data['id'];
                $result = $this->db->update('vendor',$edit,array('id'=>$id));
                set_alert('success', translate('information_has_been_updated_successfully'));
                $url    = base_url('accounting/vendor');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['vendor_edit'] = $this->db->get_where('vendor',array('id'=>$id))->result_array();
        $this->data['title'] = translate('vendor');
        $this->data['sub_page'] = 'accounting/vendor_edit';
        $this->data['main_menu'] = 'inventory';
        $this->load->view('layout/index', $this->data);        
    }
    
    public function delete_vendor($id = ''){
        if (!get_permission('account', 'is_delete')) {
            access_denied();
        }
        if (!is_superadmin_loggedin()) {
            $this->db->where('branch_id', get_loggedin_branch_id());
        }
        $this->db->where('id', $id);
        $this->db->delete('vendor');        
    }
    
    // item
    public function item(){
        if (!get_permission('account', 'is_view')) {
            access_denied();
        }
        if($_POST){
            $this->form_validation->set_rules('category_id',translate('category'),'required');
            $this->form_validation->set_rules('item',translate('item'),'required');
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                $data['branch_id'] = $this->application_model->get_branch_id();
                $result = $this->db->insert('item',$data);
                set_alert('success', translate('information_has_been_updated_successfully'));
                $url    = base_url('accounting/item');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['itemlist'] = $this->db->query('SELECT item.id, item_category.category, item.item, branch.name as branch_name FROM item LEFT JOIN branch ON branch.id = item.branch_id INNER JOIN item_category ON item_category.id = item.category_id')->result_array();
        $this->data['categorylist'] = $this->db->get('item_category')->result_array();
        $this->data['title'] = translate('item');
        $this->data['sub_page'] = 'accounting/item';
        $this->data['main_menu'] = 'inventory';
        $this->load->view('layout/index', $this->data);
    }
    
    public function item_delete($id = ''){
        if (!get_permission('account', 'is_delete')) {
            access_denied();
        }
        if (!is_superadmin_loggedin()) {
            $this->db->where('branch_id', get_loggedin_branch_id());
        }
        $this->db->where('id', $id);
        $this->db->delete('item');
    }
    
    // item category
    public function item_category(){
        if (!get_permission('account', 'is_view')) {
            access_denied();
        }
        if($_POST){
            $this->form_validation->set_rules('category',translate('category'),'required');
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                $data['branch_id'] = $this->application_model->get_branch_id();
                $result = $this->db->insert('item_category',$data);
                set_alert('success', translate('information_has_been_updated_successfully'));
                $url    = base_url('accounting/item_category');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['itemlist'] = $this->db->query('SELECT item.id, item_category.category, item.item, branch.name as branch_name FROM item LEFT JOIN branch ON branch.id = item.branch_id INNER JOIN item_category ON item_category.id = item.category_id')->result_array();
        $this->data['categorylist'] = $this->db->query('select item_category.*, branch.name as branch_name FROM item_category LEFT JOIN branch ON branch.id = item_category.branch_id ')->result_array();
        $this->data['title'] = translate('category');
        $this->data['sub_page'] = 'accounting/item_category';
        $this->data['main_menu'] = 'inventory';
        $this->load->view('layout/index', $this->data);
    }
    
    public function item_category_delete($id = ''){
        if (!get_permission('account', 'is_delete')) {
            access_denied();
        }
        if (!is_superadmin_loggedin()) {
            $this->db->where('branch_id', get_loggedin_branch_id());
        }
        $this->db->where('id', $id);
        $this->db->delete('item_category');
        if ($this->db->affected_rows() > 0) {
            $this->db->where('category_id', $id);
            $this->db->delete('item');
        }
    }
    
    // stock
    public function stock(){
        if(isset($_POST['submit_discharge'])){
            $data = $this->input->post();
            $data['branch_id'] = $this->application_model->get_branch_id();
            $this->data['students2'] = $this->db->query('select student.id, student.first_name, student.middle_name, student.last_name, enroll.roll from enroll inner join student on enroll.student_id = student.id left join stock_discharge on enroll.student_id = stock_discharge.student_id where stock_discharge.student_id IS NULL AND enroll.class_id = '.$data['class_id'].' and enroll.section_id = '.$data['section_id'].'' )->result_array();
            $this->data['students1'] = $this->db->query('select student.id, student.first_name, student.middle_name, student.last_name, enroll.roll from enroll inner join student on enroll.student_id = student.id right join stock_discharge on enroll.student_id = stock_discharge.student_id where enroll.class_id = '.$data['class_id'].' and enroll.section_id = '.$data['section_id'].'' )->result_array();
            $result = $this->db->query('select id,item from item where id = '.$data['item_id'])->row_array();
            $this->data['item'] = $result;
        }
        $this->db->select('stock.id, vendor.name, item.item, stock.quantity, stock.rate');
        $this->db->join('vendor', 'vendor.id = vendor_id');
        $this->db->join('item', 'item.id = item_id');
        $this->data['stocks'] = $this->db->get('stock')->result_array();
        $this->data['vendorlist'] = $this->db->get('vendor')->result_array();
        $this->data['itemlist'] = $this->db->query('SELECT item.id, item_category.category, item.item FROM item INNER JOIN item_category ON item_category.id = item.category_id')->result_array();
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['title'] = translate('stock');
        $this->data['sub_page'] = 'accounting/stock';
        $this->data['main_menu'] = 'inventory';
        $this->load->view('layout/index', $this->data);       
    }
    
    public function stock_add(){
        if($_POST){
            $this->form_validation->set_rules('vendor_id','Vendor','required');
            $this->form_validation->set_rules('item_id','Item','required');
            $this->form_validation->set_rules('quantity','Quantity','required');
            $this->form_validation->set_rules('rate','Rate','required');
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                $data['branch_id'] = $this->application_model->get_branch_id();
                $result = $this->db->insert('stock',$data);
                set_alert('success', translate('information_has_been_added_successfully'));
                $url    = base_url('accounting/stock');
                $array  = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
    }
    
    public function update_stock($id = ''){
        if (!get_permission('account', 'is_view')) {
            access_denied();
        }
        if($_POST){
            $this->form_validation->set_rules('vendor_id',translate('vendor'),'required');
            $this->form_validation->set_rules('item_id',translate('item'),'required');
            $this->form_validation->set_rules('quantity',translate('quantity'),'required');
            $this->form_validation->set_rules('rate',translate('rate'),'required');
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                $edit['branch_id'] = $this->application_model->get_branch_id();
                $edit['vendor_id'] = $data['vendor_id'];
                $edit['item_id'] = $data['item_id'];
                $edit['quantity'] = $data['quantity'];
                $edit['rate'] = $data['rate'];
                $id = $data['id'];
                if($result = $this->db->update('stock',$edit,array('id'=>$id))){
                    set_alert('success', translate('information_has_been_updated_successfully'));
                    $url    = base_url('accounting/stock');
                    $array  = array('status' => 'success', 'url' => $url);
                }
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['stock_edit'] = $this->db->get_where('stock',array('id'=>$id))->result_array();
        $this->data['title'] = translate('stock_edit');
        $this->data['sub_page'] = 'accounting/stock_update';
        $this->data['main_menu'] = 'inventory';
        $this->load->view('layout/index', $this->data);   
    }
    
    public function stock_discharge(){
        $insert['item_id'] = $this->input->post('item_id');
        $insert['student_id'] = $this->input->post('student_id');
        $insert['branch_id'] = $this->input->post('branch_id');
        if($this->db->insert('stock_discharge',$insert)){
            echo 1;die;    
        }
        else{
            echo 0; die;
        }
    }
    
    public function stock_history(){
        // var_dump($_SESSION);die;
        if(is_superadmin_loggedin()){
            if($_POST){
                $branch_id = $this->application_model->get_branch_id();
                $this->data['students'] = $this->db->query('select stock_discharge.date, student.id, student.first_name, student.middle_name, student.last_name, enroll.roll, item.item, class.name as class_name, section.name as section_name from enroll right join stock_discharge on stock_discharge.student_id = enroll.student_id inner join student on enroll.student_id = student.id left join item on item.id = stock_discharge.item_id left join section on section.id = enroll.section_id left join class on class.id = enroll.class_id where stock_discharge.branch_id='.$branch_id )->result_array();
            }
        } else {
            $branch_id = $this->application_model->get_branch_id();
            $this->data['students'] = $this->db->query('select stock_discharge.date, student.id, student.first_name, student.middle_name, student.last_name, enroll.roll, item.item, class.name as class_name, section.name as section_name from enroll right join stock_discharge on stock_discharge.student_id = enroll.student_id inner join student on enroll.student_id = student.id left join item on item.id = stock_discharge.item_id left join section on section.id = enroll.section_id left join class on class.id = enroll.class_id' )->result_array();
        }
        $this->data['branch_id'] = $this->application_model->get_branch_id();
        $this->data['title'] = translate('stock_history');
        $this->data['sub_page'] = 'accounting/stock_history';
        $this->data['main_menu'] = 'inventory';
        $this->load->view('layout/index', $this->data);               
    }
    
    public function delete_stock($id = ''){
        if (!get_permission('account', 'is_delete')) {
            access_denied();
        }
        if (!is_superadmin_loggedin()) {
            $this->db->where('branch_id', get_loggedin_branch_id());
        }
        $this->db->where('id', $id);
        $this->db->delete('stock');        
    }
    
    // generate receipt
    public function cash_generate_receipt(){
        $result = $this->db->get('receipt_no')->result_array();
        $this->data['receipt_no'] = $result[0]['receipt_no'];
        $update['receipt_no'] = $result[0]['receipt_no'] + 1;
        $this->db->where('id', '1');
        $this->db->update('receipt_no', $update);
        $this->data['title'] = translate('generate').' '.translate('cash').' '.translate('receipt');
        $this->data['sub_page'] = 'accounting/cash_generate_receipt';
        $this->data['main_menu'] = 'accounting';
        $this->load->view('layout/index', $this->data);           
    }
    
    public function generate_bill(){
        $this->data['title'] = translate('generate').' '.translate('bill');
        $this->data['sub_page'] = 'accounting/generate_bill';
        $this->data['main_menu'] = 'accounting';
        $this->load->view('layout/index', $this->data);          
    }
    
}
