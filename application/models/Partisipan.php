<?php

class Partisipan extends CI_Model {
    public function get() {
        $this->load->database();
        return $this->db->get("partisipan")->result();
    }
    public function validateButton($id) {
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get("updates")->result();
    }
    public function show() {
        $logger = $this->session->userdata('username');
        $this->load->database();
        $this->db->order_by("id");
        $query = $this->db->get_where('partisipan', array('bidan' => $logger));
        return $query->result();
        
    }
    public function delete($id) {
        $this->load->database();
        $this->db->where('id',$id);
        $this->db->delete('partisipan');
        return $this->db->affected_rows();
    }
    public function detail($id) {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('partisipan');
        $this->db->join('updates','updates.id = partisipan.id');
        $this->db->where("updates.id", $id);
        return $this->db->get()->result_array();
    }
    public function get_party() {
        $this->load->database();
        $this->db->select('*')->from('partisipan')
        ->join('updates','updates.id = partisipan.id');
        return $this->db->get()->result_array();
    }
    public function insert($data = array()) {
        $this->load->database();
        return $this->db->insert("partisipan", $data);
    }
    public function update($updates = array()) {
        $this->load->database();
        return $this->db->insert("updates", $updates);
    }
    
    public function getInfo($field, $value){
        $this->load->database();
        $this->db->where($field, $value);
        $query = $this->db->get('partisipan');
        return $query->row_array();
    }
    
    public function sendUpdates($id, $datanew) {
        $this->db->where('id', $id);
        $this->db->update("partisipan", $datanew);
        return $this->db->affected_rows();
    }

    public function getRecords($id){
        $this->load->database();
        $this->db->select('*');
        $this->db->from('updates');
        $this->db->where("id", $id);
        return $this->db->get()->result_array();
    }

    public function sendRecords($id, $datanew) {
        $this->db->where('id', $id);
        $this->db->update("updates", $datanew);
        return $this->db->affected_rows();
    }
    public function delRecords($id) {
        $this->load->database();
        $this->db->where('update_id',$id);
        $this->db->delete('updates');
        return $this->db->affected_rows();
    }

}


?>