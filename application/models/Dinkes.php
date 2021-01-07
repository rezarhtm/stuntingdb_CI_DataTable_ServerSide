<?php

class Dinkes extends CI_Model
{
    public function get_dinkes(){
        $this->load->database();
        $get_dinkes_only = array('user_category' => 'DINKES');
        return $this->db->get_where('user',$get_dinkes_only)->result();
    }
}

?>