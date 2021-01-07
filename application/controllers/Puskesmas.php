<?php

class Puskesmas extends CI_Controller
{
    public function index() {
        $this->load->model('PusModel');
        $data = array(
            'bidan' => $this->PusModel->get_bidan()
        );
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    public function add_bidan() {
        $this->load->model('PusModel');
        $tag = $this->session->userdata('username');
        
        $now = date("Y");
        $kode = 12;
        $year = substr($now, 2, 2);
        $ran = rand(100,999); #1000-9999

        $hasil = $kode . $year . $ran;
        if($this->input->method()== 'post'){
            $add = $this->PusModel->add_bidan(array(
                'user_id' => $hasil,
                'user_firstname' => $this->input->post('user_firstname'),
                'user_email' => $this->input->post('user_email'),
                'password' => md5('admin'),
                'reg_date' => $this->input->post('reg_date'),
                'user_category' => 'BIDAN',
                'tag' => $tag,
                'last_update' => date('Y-m-d H:i:s')
            ));
            if($add) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
        }

        $this->load->view('header');
        $this->load->view('addbidan');
        $this->load->view('footer');
    }

    public function edit_bidan($id){
        $this->load->model('PusModel');
        $data['bidan']=$this->PusModel->get_one('user_id',$id);

        if($this->input->post())
        {
            $datanew = array (
                'user_firstname' => $this->input->post('user_firstname'),
                'user_email' => $this->input->post('user_email'),
                'last_update' => $this->input->post('reg_date'),
            );

            $send = $this->PusModel->change_bidan($id, $datanew);

            if($send) {
                $this->session->set_flashdata('success', 'Data berhasil diperbarui');
            }
        }

        $this->load->view('header');
        $this->load->view('editbidan', $data);
        $this->load->view('footer');
    }

    public function delete_bidan($id = 0){
        $this->load->model("PusModel");
        $this->PusModel->delete_bidan($id);
        redirect('/home');
    }
}


?>