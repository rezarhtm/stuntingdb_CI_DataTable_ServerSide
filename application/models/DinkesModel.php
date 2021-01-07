<?php

class DinkesModel extends CI_Model
{
    public function get_puskesmas(){
        $this->load->database();
        $get_puskesmas_only = array('user_category'=>'PUSKESMAS');
        return $this->db->get_where('user',$get_puskesmas_only)->result();
    }

    public function view_all_bidan(){
        $this->load->database();
        $get_only = array('user_category'=>'BIDAN');
        return $this->db->get_where('user',$get_only)->result();
    }
    
    public function view_all_partisipan(){
        $this->load->database();
        return $this->db->get('partisipan')->result();
    }

    public function add_puskesmas($add = array()){
        $this->load->database();
        return $this->db->insert('user',$add);
    }

    public function seek_puskesmas($id) {
        $this->load->database();
        $this->db->where('user_id',$id);
        return $this->db->get('user')->result();
    }

    public function get_one($field, $value){
        $this->load->database();
        $this->db->where($field, $value);
        $query = $this->db->get('user');
        return $query->row_array();
    }

    public function change_puskesmas($id, $datanew) {
        $this->db->where('user_id', $id);
        $this->db->update("user", $datanew);
        return $this->db->affected_rows();
    }

    public function delete_puskesmas($id) {
        $this->load->database();
        $this->db->where('user_id',$id);
        $this->db->delete('user');
        return $this->db->affected_rows();
    }

}
?>