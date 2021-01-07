<?php

Class ServersideModel extends CI_Model{

    var $table = 'partisipan';
    var $column_order = array('id', 'name_anak', 'bidan', 'puskesmas');
    var $order = array('id', 'name_anak', 'bidan', 'puskesmas');
    
    private function query_partisipan()
    {
        $this->load->database();
        $this->db->from($this->table);
        if(isset($_POST['search']['value'])){
            $this->db->like('id', $_POST['search']['value']);
            $this->db->or_like('name_anak', $_POST['search']['value']);
            $this->db->or_like('bidan', $_POST['search']['value']);
            $this->db->or_like('puskesmas', $_POST['search']['value']);
        }

        if(isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }else{
            $this->db->order_by('name_anak','ASC');
        }
    }
    
    public function get_partisipan()
    {
        $this->load->database();
        $this->query_partisipan();
        $query = $this->db->get();
        
        return $query -> result();
    }

    public function count_filter_data()
    {
        $this->query_partisipan();
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