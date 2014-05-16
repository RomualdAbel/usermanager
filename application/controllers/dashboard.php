<?php
    class Dashboard extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->isvalidate();
        }
        
        private function isvalidate(){
            if(($this->session->userdata('islogged')) == FALSE ){
                redirect('login');
            }
        }
        function index(){
            $this->load->view('dashboard_view');
        }
        
        function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }
        
    }

