<?php
    class Login_model extends CI_Model{
        
        function validate($email,$pass){
           
            $this->db->where('email-login', $email);
            $this->db->where('pass-login', $pass);
            $this->db->from('login');
            
            $query = $this->db->get();
            
            if(count($query->result()) == 1){
                
                return TRUE;
                
            } else {
                
                return FALSE;
                
            }
        }
        
    }

