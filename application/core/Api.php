<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{
    // class Api extends CI_Controller{
    public $in;
    public $hasAuth;
    public $auth;
    public $user;
    public $token;
    public $headers;
    public function __construct(){

        parent::__construct();
        $this->in=(object)$_POST;
        $this->config->set_item('csrf_protection', false);
        $this->hasAuth=false;;
        $this->load->model('authentication_model');
        $this->load->model('application_model');
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
            // you want to allow, and if so:
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
            // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                // may also be using PUT, PATCH, HEAD etc
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
            exit(0);

        }

        $this->headers=$_SERVER ;
        if(isset($_SERVER['HTTP_TOKEN'])){
            $this->token=$_SERVER['HTTP_TOKEN'];
            $this->auth=$this->authentication_model->loggedUser($this->token);
            if($this->auth){
                $this->hasAuth=true;
                $this->user = $this->application_model->getUserData($this->auth->role,$this->auth->user_id);
            }
        }

    }

    public function CheckAuth(){
        if(!$this->hasAuth){
            $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(["message"=>"Unauthenticated Route"], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
    exit;
        }
    }
}
