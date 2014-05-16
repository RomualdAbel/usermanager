<?php
    class Login_model extends CI_Model{
        
        function validate($user,$pass){
           
            $this->db->where('user', $user);
            $this->db->where('pass', $pass);
            $this->db->from('login');
            
            $query = $this->db->get();
            
            if(count($query->result()) == 1){
                return TRUE;
            } else {
                return FALSE;
            }
        }
        
    }

