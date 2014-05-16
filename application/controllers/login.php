<?php
    class Login extends CI_Controller {
        
        function __construct() {
            parent::__construct();
        }
        
        function index($msg=NULL){
            $data['msg'] = $msg;
            $this->load->view('login_view',$data);
        }
        
        function do_login(){
            
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            
            $this->load->model('login_model','LoginManager');
            
            $result = $this->LoginManager->validate($user,$pass);
            
            if($result == FALSE){
                
                $msg = '<h3 style="color:red;" align="center"> Login ou Mot de passe invalide. </h3>';
		$this->index($msg);

            
            } else {
                redirect('dashboard');
            }
        }
        
    }

