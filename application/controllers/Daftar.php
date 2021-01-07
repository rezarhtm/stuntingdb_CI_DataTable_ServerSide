<?php

class Daftar extends CI_Controller {
    public function index() {
        $this->load->model("partisipan");
        $this->load->helper('date');

        $current = "%Y-%m-%d %h:%i %A";
        $thistime = mdate($current);

        $now = date("Y");
        $kode = $this->input->post('kd_lokasi');
        
        if ($this->input->post('status')==='Control') {
            $status = 0;
        } else {
            $status = 1;
        }
        
        $year = substr($now, 2, 2);
        $ran = rand(100,999); #1000-9999

        $hasil = $kode . $status . $year . $ran;

        if($this->input->method() == "post"){
            $dataPost = array (
                'id' => $hasil,
                'bidan' => $this->input->post('bidan'),
                'puskesmas' => $this->input->post('puskesmas'),
                'kd_lokasi' => $kode,
                'status' => $this->input->post('status'),
                'status_gizi' => $this->input->post('status_gizi'),
                'reg_date' =>$thistime,
                'last_update' =>$thistime,
                'name_anak' => $this->input->post('name_anak'),
                'age_anak' => $this->input->post('age_anak'),
                'sex' => $this->input->post('sex'),
                'pob' => $this->input->post('pob'),
                'dob' => $this->input->post('dob'),
                'diarrhea_pre' => $this->input->post('diarrhea_pre'),
                'diarrhea_post' => $this->input->post('diarrhea_post'),
                'fever_pre' => $this->input->post('fever_pre'),
                'fever_post' => $this->input->post('fever_post'),
                'appetite_pre' => $this->input->post('appetite_pre'),
                'appetite_post' => $this->input->post('appetite_post'),
                'access_posyandu' => $this->input->post('access_posyandu'),
                'circumstances_access_posyandu' => $this->input->post('circumstances_access_posyandu'),
                'suplemen' => $this->input->post('suplemen'),
                'f_pob' => $this->input->post('f_pob'),
                'f_dob' => $this->input->post('f_dob'),
                'f_ethnic' => $this->input->post('f_ethnic'),
                'f_edu' => $this->input->post('f_edu'),
                'f_job' => $this->input->post('f_job'),
                'f_eco' => $this->input->post('f_eco'),
                'm_pob' => $this->input->post('m_pob'),
                'm_dob' => $this->input->post('m_dob'),
                'num_child' => $this->input->post('num_child'),
                'num_preg' => $this->input->post('num_preg'),
                'freq_preg' => $this->input->post('freq_preg'),
                'm_weight' => $this->input->post('m_weight'),
                'm_height' => $this->input->post('m_height'),
                'm_edu' => $this->input->post('m_edu'),
                'm_ethnic' => $this->input->post('m_ethnic'),
                'm_job' => $this->input->post('m_job'),
                'breastfeeding' => $this->input->post('breastfeeding'),
                'cb_method' => $this->input->post('cb_method'),
                'diabete_status' => $this->input->post('diabete_status'),
                'm_supplement' => $this->input->post('m_supplement'),
                'm_supplement_type' => $this->input->post('m_supplement_type'),
                
            );

            if($this->partisipan->insert($dataPost)) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
        }
        $this->load->view("header");
        $this->load->view("indexview");
        $this->load->view("footer");
    }
}

?>