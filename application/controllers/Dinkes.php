<?php

class Dinkes extends CI_Controller
{
    public function index() {
        $this->load->model('DinkesModel');
        $data = array(
            'puskesmas' => $this->DinkesModel->get_puskesmas()
        );
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    public function view_bidan() {
        $this->load->model('DinkesModel');
        $data = array(
            'bidan' => $this->DinkesModel->view_all_bidan()
        );
        $this->load->view('header');
        $this->load->view('view_bidan', $data);
        $this->load->view('footer');
    }

    public function view_partisipan() {
        $this->load->model('DinkesModel');
        $data = array(
            'partisipan' => $this->DinkesModel->view_all_partisipan()
        );
        $this->load->view('header');
        $this->load->view('view_partisipan', $data);
        $this->load->view('footer');
    }

    public function add_puskesmas() {
        $this->load->model('DinkesModel');
        $tag = $this->session->userdata('username');
        
        $now = date("Y");
        $kode = 11;
        $year = substr($now, 2, 2);
        $ran = rand(100,999); #1000-9999

        $hasil = $kode . $year . $ran;
        if($this->input->method()== 'post'){
            $add = $this->DinkesModel->add_puskesmas(array(
                'user_id' => $hasil,
                'user_firstname' => $this->input->post('user_firstname'),
                'user_email' => $this->input->post('user_email'),
                'password' => md5('admin'),
                'reg_date' => $this->input->post('reg_date'),
                'user_category' => 'PUSKESMAS',
                'tag' => $tag,
                'last_update' => date('Y-m-d H:i:s')
            ));
            if($add) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
        }
        $this->load->view('header');
        $this->load->view('addpuskesmas');
        $this->load->view('footer');
    }

    public function edit_puskesmas($id){
        $this->load->model('DinkesModel');
        $data['puskesmas']=$this->DinkesModel->get_one('user_id',$id);

        if($this->input->post())
        {
            $datanew = array (
                'user_firstname' => $this->input->post('user_firstname'),
                'user_email' => $this->input->post('user_email'),
                'last_update' => $this->input->post('reg_date'),
            );

            $send = $this->DinkesModel->change_puskesmas($id, $datanew);

            if($send) {
                $this->session->set_flashdata('success', 'Data berhasil diperbarui');
            }
        }
        $this->load->view('header');
        $this->load->view('editpuskesmas', $data);
        $this->load->view('footer');
    }

    public function delete_puskesmas($id = 0){
        $this->load->model("DinkesModel");
        $this->DinkesModel->delete_puskesmas($id);
        redirect('/home');
    }
}


?>