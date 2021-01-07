<?php
class Chart_model extends CI_Model{
 
  //get data from database
  function get_data(){
      $this->db->select('date,head,weight,height');
      $result = $this->db->get_where('updates', array('id' => '985120927'));
      return $result;
  }
 
}