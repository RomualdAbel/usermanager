<?php
    class Users_model extends CI_Model{
        
        function __construct() {
            parent::__construct();
        }
                
        function register_user($data){
            $this->db->insert('users',$data);
        }
        
    }