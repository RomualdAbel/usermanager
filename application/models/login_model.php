<?php
    class Login_model extends CI_Model{
        
        function validate($email,$pass){
           
            $this->db->where('email', $email);
            $this->db->where('pass', $pass);
            $this->db->from('users');
            
            $query = $this->db->get();
            
            if(count($query->result()) == 1){
                
                return TRUE;
                
            } else {
                
                return FALSE;
                
            }
        }
        
    }

