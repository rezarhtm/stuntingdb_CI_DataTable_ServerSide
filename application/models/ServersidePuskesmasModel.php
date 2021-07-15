<?php

Class ServersidePuskesmasModel extends CI_Model{

    var $table = 'user';
    var $column_order = array('user_id', 'user_firstname', 'tag', 'reg_date');
    var $order = array('user_id', 'user_firstname', 'tag', 'reg_date');
    
    private function query_puskesmas()
    {
        $this->load->database();
        $this->db->from($this->table);
        $this->db->where('user_category','PUSKESMAS');
        //$this->db->get_where('user', array('user_category' => 'BIDAN'));
        if(isset($_POST['search']['value'])){
            $this->db->like('user_id', $_POST['search']['value']);
            $this->db->or_like('user_firstname', $_POST['search']['value']);
            $this->db->or_like('tag', $_POST['search']['value']);
            $this->db->or_like('reg_date', $_POST['search']['value']);
        }

        if(isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }else{
            $this->db->order_by('user_firstname','ASC');
        }
    }
    
    public function get_puskesmas()
    {
        $this->load->database();
        $this->query_puskesmas();
        #$this->db->where('user_category','PUSKESMAS');
        $query = $this->db->get();
        
        return $query -> result();
    }

    public function count_filter_data()
    {
        $this->query_puskesmas();
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