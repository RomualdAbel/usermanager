<?php
    class Users extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->isvalidate();
        }
        
        private function isvalidate(){
            if(($this->session->userdata('islogged')) == TRUE ){
                redirect('dashboard');
            }
        }
        
        function index(){
            $this->load->view('users_view');
        }
        
        function register(){
            $this->load->view('register_view');
        }
    }