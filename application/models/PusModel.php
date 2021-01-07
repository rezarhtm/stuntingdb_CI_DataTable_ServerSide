<?php

// model puskesmas

class PusModel extends CI_Model
{
    public function get_bidan(){
        $logger = $this->session->userdata('username');
        $this->load->database();
        $query = $this->db->get_where('user', array('tag' => $logger));
        return $query->result();
    }

    public function get_all() {
        $this->load->database();
        $query = $this->db->get_where('user', array('user_category' => 'BIDAN'));
        return $query->result();
    }

    public function add_bidan($add = array()){
        $this->load->database();
        return $this->db->insert('user', $add);
    }

    public function get_one($field, $value){
        $this->load->database();
        $this->db->where($field, $value);
        $query = $this->db->get('user');
        return $query->row_array();
    }

    public function change_bidan($id, $datanew) {
        $this->db->where('user_id', $id);
        $this->db->update("user", $datanew);
        return $this->db->affected_rows();
    }

    public function delete_bidan($id) {
        $this->load->database();
        $this->db->where('user_id',$id);
        $this->db->delete('user');
        return $this->db->affected_rows();
    }
    
}


?>