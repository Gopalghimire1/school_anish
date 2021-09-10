<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UpdateUser extends Authentication_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function updateDateType(){
        if(is_loggedin()){
            if($this->input->post('date_type')){
                $date_type = $this->input->post('date_type');
                if($date_type === 'ad' || $date_type === 'bs'){
                    if($this->db->update('login_credential',array('date_type' => $date_type), array('id'=>$this->session->userdata('loggedin_id')))){
                        $this->session->unset_userdata('date_type');
                        $this->session->set_userdata('date_type',$date_type);
                        echo '1';
                    }
                    else{
                        echo '0';
                    }
                }
                else{
                    echo '0';
                }
            }
        }
    }
}