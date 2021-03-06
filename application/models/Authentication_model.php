<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Authentication_model extends MY_Model
{
    
    public function loggedUser($token){
        $this->db->select('*');
        $this->db->from('tokens');
        $this->db->where('token', $token);
        $this->db->limit(1);
        $t_query=$this->db->get();
        if ($t_query->num_rows() == 1) {
            $t_data= $t_query->row();
            // return $t_data->c_id;
            $this->db->select('id,user_id,username,role,active');
            $this->db->from('login_credential');
            $this->db->where('id', $t_data->c_id);
            $this->db->limit(1);
            $query = $this->db->get();
            // return $query->num_rows();
            if ($query->num_rows() == 1) {
                $data= $query->row();
                // return $data;
                if($data->active==1){
                    return $data;
                }else{
                    return false;
                }
            }
            
        }
        return false;
    }
    // checking login credential
    public function login_credential($username, $password)
    {
        $this->db->select('*');
        $this->db->from('login_credential');
        $this->db->where('username', $username);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $verify_password = $this->app_lib->verify_password($password, $query->row()->password);
            if ($verify_password) {
                return $query->row();
            }
        }
        return false;
    }

    // password forgotten
    public function lose_password($username)
    {
        if (!empty($username)) {
            $this->db->select('*');
            $this->db->from('login_credential');
            $this->db->where('username', $username);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $login_credential = $query->row();
                $getUser = $this->application_model->getUserNameByRoleID($login_credential->role, $login_credential->user_id);
                $key = hash('sha512', $login_credential->role . $login_credential->username . app_generate_hash());
                $query = $this->db->get_where('reset_password', array('login_credential_id' => $login_credential->id));
                if ($query->num_rows() > 0) {
                    $this->db->where('login_credential_id', $login_credential->id);
                    $this->db->delete('reset_password');
                }
                $arrayReset = array(
                    'key' => $key,
                    'login_credential_id' => $login_credential->id,
                    'username' => $login_credential->username,
                );
                $this->db->insert('reset_password', $arrayReset);
                // send email for forgot password
                $this->load->model('email_model');
                $arrayData = array(
                    'role' => $login_credential->role, 
                    'branch_id' => $getUser['branch_id'], 
                    'username' => $login_credential->username, 
                    'name' => $getUser['name'], 
                    'reset_url' => base_url('authentication/pwreset?key=' . $key), 
                    'email' => $getUser['email'], 
                );
                $this->email_model->sentForgotPassword($arrayData);
                return true;
            }
        }
        return false;
    }

    public function urlaliasToBranch($url_alias)
    {
        $get = $this->db->select('branch_id')
        ->where('url_alias', $url_alias)
        ->get('front_cms_setting')
        ->row_array();
        if (empty($url_alias)) {
            return null;
        } else {
            return $get['branch_id'];
        }
    }

    public function getSegment($id = '')
    {
        $segment = $this->uri->segment($id);
        if (empty($segment)) {
            return '';
        } else {
            return '/' . $segment;
        }
    }

}
