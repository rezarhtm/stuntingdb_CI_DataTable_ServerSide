<?php

class Report extends CI_Controller{
    
    public function detail($id){
        $this->load->model("partisipan");

        $this->load->view("header");
        $this->load->view("details", $data);
        $this->load->view("footer");
    }


}