<?php
    class Users extends CI_Controller {
        
        function __construct() {
            parent::__construct();
        }
        
        private function isvalidate(){
            if(($this->session->userdata('islogged')) == FALSE ){
                redirect('dashboard');
            }
        }
        
        function index(){
            $this->isvalidate();
            $this->load->view('users_view');
        }
        
        function register(){
            $this->load->view('register_view');
        }
        
        function do_register(){
            $user = $this->input->post('username');
            $email = $this->input->post('email');
            $pass = $this->input->post('password');
            
            $data = array(
                          'user' => $user,
                          'email' => $email,
                          'pass' => $pass
            );
            
            $this->load->model('users_model','UserManager');
            $this->UserManager->register_user($data);
            redirect('login');
            
        }
    }