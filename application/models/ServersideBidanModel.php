<?php

Class ServersideBidanModel extends CI_Model{

    var $table = 'user';
    var $column_order = array('user_id', 'user_firstname','user_category', 'tag', 'reg_date');
    var $order = array('user_id', 'user_firstname','user_category', 'tag', 'reg_date');
    
    private function query_bidan()
    {
        $this->db->from($this->table);
        //$this->db->get_where($this->table, array('user_category' => 'BIDAN'));
        // $this->load->database();
        // $this->db->from($this->table);
        // $this->db->where('user_category','BIDAN');
        //$this->db->get_where('user', array('user_category' => 'BIDAN'));
        if(isset($_POST['search']['value'])){
            $this->db->like('user_id', $_POST['search']['value']);
            $this->db->or_like('user_firstname', $_POST['search']['value']);
            $this->db->or_like('user_category', $_POST['search']['value']);
            $this->db->or_like('tag', $_POST['search']['value']);
            $this->db->or_like('reg_date', $_POST['search']['value']);
        }

        if(isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }else{
            $this->db->order_by('user_firstname','ASC');
        }
    }
    
    public function get_bidan()
    {
        $this->load->database();
        $this->query_bidan();
        $this->db->where('user_category','BIDAN');
        $query = $this->db->get();
        
        return $query -> result();
    }

    public function count_filter_data()
    {
        $this->query_bidan();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}

?>