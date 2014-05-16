<?php
    class Login extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->isvalidate();
        }
        
        private function isvalidate(){
            if(($this->session->userdata('islogged')) == TRUE ){
		redirect('dashboard');
            }
        }
                
        function index($msg=NULL){
            $data['msg'] = $msg;
            $this->load->view('login_view',$data);
        }
        
        function do_login(){
            
            $email = $this->input->post('email');
            $pass = $this->input->post('password');
            
            $this->load->model('login_model','LoginManager');
            
            $result = $this->LoginManager->validate($email,$pass);
            
            if($result == FALSE){
                
                $msg = 'Username or Password invalid.';
		$this->index($msg);

            
            } else {
                
                $data = array(
                   'email'     => $email,
                   'islogged' => TRUE
                );
                $this->session->set_userdata($data);
                
                redirect('dashboard');
            }
        }
        
    }

