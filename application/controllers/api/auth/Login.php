<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Api.php';
class Login extends Api {
   
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Branch_model');
      
    }

    public function index_post(){
        $email = $this->input->post('email');
                $password = $this->input->post('password');
                // username is okey lets check the password now
                $login_credential = $this->authentication_model->login_credential($email, $password);
                if ($login_credential) {
                    if ($login_credential->active) {
                        if ($login_credential->role == 6) {
                            $userType = 'parent';
                        } elseif($login_credential->role == 7) {
                            $userType = 'student';
                        } else {
                            $userType = 'staff';
                        }
                        $getUser = $this->application_model->getUserData($login_credential->role, $login_credential->user_id);
                        
                        $getConfig = $this->db->get_where('global_settings', array('id' => 1))->row_array();
                        
                        $token=password_hash( $login_credential->id.time(),PASSWORD_DEFAULT);

                        $this->db->update('login_credential', array('last_login' => date('Y-m-d H:i:s')), array('id' => $login_credential->id));

                        $tokenData = $this->db->insert('tokens',[
                            'c_id'=>$login_credential->id,
                            'token'=>$token,
                            'validtill'=>date('Y-m-d', strtotime(' + 360 days'))
                        ]);

                       $this->response(['user'=>$getUser,'token'=>$token],200);

                    } else {
                        $this->response('Authentication Failed !',401);
                    }
                } else {
                    $this->response('Authentication Failed !',401);
                }
    }


    public function pass_get(){
        $data =password_hash("hello",PASSWORD_DEFAULT);
        $this->response($data,200);
    }


}