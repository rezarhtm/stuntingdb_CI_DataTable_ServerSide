<?php

class Update extends CI_Controller {
    public function newupdate($data = array())
    {
        $this->load->database();
        return $this->db->insert("updates", $data);
    }
}