<?php
class Login_model extends CI_Model{
 
  function validate($email,$password){
    $this->db->where('user_email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('user',1);
    return $result;
  }
 
}