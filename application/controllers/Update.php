<?php

class Update extends CI_Controller {
    public function index() {
        $this->load->model("partisipan");

        $now = date("Y-m");
        $year = substr($now, 2, 2);
        $mo = substr($now, 5, 2);
        $kd = 88;
        $ran = rand(10,99); #1000-9999

        $hasil = 7 . $year . $mo . $kd . $ran;

        echo $hasil;

        if($this->input->method() == "post"){
            $dataPost = array (
                'update_id' => $this->input->post($hasil),
                'id' => $this->input->post('id'),
                'date' => $this->input->post('date'),
                'head' => $this->input->post('head'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
            );

            if($this->partisipan->insert($dataPost)) {
                $data["message"] = "Sukses";
            } else {
                $data["message"] = "Gagal";
            }
        }
        $this->load->view("header");
        $this->load->view("newupdate");
        $this->load->view("footer");
    }
}

?>