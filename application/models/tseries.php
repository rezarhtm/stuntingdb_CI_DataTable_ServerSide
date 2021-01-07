<?php

class Tseries extends CI_Model {
    
    public function timeseries($id) {
        $this->load->database();
        $this->db->select('head');
        $this->db->where("id",$id);
        return $this->db->get("updates")->result_array();
    }
    
}


?>