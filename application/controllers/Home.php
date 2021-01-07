<?php

class Home extends CI_Controller{
 
    function index(){
        if($this->session->userdata('level')==='BIDAN'){
            $this->load->model("partisipan");
            $data = array(
                'partisipan' => $this->partisipan->show()
            );
            
        }elseif ($this->session->userdata('level')==='PUSKESMAS') {
            $this->load->model("PusModel");
            $data = array(
                'bidan' => $this->PusModel->get_bidan()
            );
        }elseif ($this->session->userdata('level')==='DINKES') {
            $this->load->model("DinkesModel");
            $data = array(
                'puskesmas' => $this->DinkesModel->get_puskesmas()
            );
        }
        $this->load->view("header");
        $this->load->view("home", $data);
        $this->load->view("footer");
    }

    public function profile() {
        $data = array(
            'profile' => $this->db->get_where('user', ['user_email' => $this->session->userdata('email')])->row_array()
        );
        $this->load->view('header');
        $this->load->view('profile', $data);
        $this->load->view('footer');
    }

    public function get_all_puskesmas(){
        $this->load->model("DinkesModel");
        $data = array(
            'puskesmas' => $this->DinkesModel->get_puskesmas()
        );

        $this->load->view("header");
        $this->load->view("view_puskesmas", $data);
        $this->load->view("footer");
    }








    public function get_all_part(){
        $this->load->model('ServersideModel');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            $data = $this->ServersideModel->get_partisipan();
            $deploy = [];
            foreach($data as $x) {
                $row = array();
                $row[] = $x->id;
                $row[] = $x->name_anak;
                $row[] = $x->bidan;
                $row[] = $x->puskesmas;
                $row[] = '<a href="'.base_url().'home/detail/'.$x->id.'"><button type="button" class="btn btn-warning">Laporan</button></a>';
                $deploy[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->ServersideModel->count_all_data(),
                "recordsFiltered" => $this->ServersideModel->count_filter_data(),
                "data" => $deploy,
            );

            echo json_encode($output);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET'){
            $this->load->view("header");
            $this->load->view("view_partisipan");
            $this->load->view("footer");
        }

    }




















    public function get_all_bidan(){
        $this->load->model("PusModel");
        $data = array(
            'bidan' => $this->PusModel->get_all()
        );

        $this->load->view("header");
        $this->load->view("view_bidan", $data);
        $this->load->view("footer");
    }

    public function get_all_(){
        $this->load->model("PusModel");
        $data = array(
            'bidan' => $this->PusModel->get_all()
        );

        $this->load->view("header");
        $this->load->view("view_bidan", $data);
        $this->load->view("footer");
    }

    public function detail($id){
        $this->load->model("partisipan");
        $datad = array("partisipan" => $this->partisipan->detail($id));
        #$datat = array("updates" => $this->partisipan->timeseries($id));
        
        $this->load->view("header");
        $this->load->view("details", $datad);
        $this->load->view("footer");
    }
    public function delete($id){
        $this->load->model("partisipan");
        $this->partisipan->delete($id);
        redirect('/home');
    }

    public function tseries($id){
        $this->load->model("partisipan");
        $datat = array("updates" => $this->partisipan->timeseries($id));
        
        $this->load->view("header");
        $this->load->view("details", $datat);
        $this->load->view("footer");
    }

    public function newupdate($id){
        $this->load->model("partisipan");
        $data = array("partisipan" => $this->partisipan->detail($id));
    
        $now = date("Y-m");
        $year = substr($now, 2, 2);
        $mo = substr($now, 5, 2);
        $ran = rand(100,999); #1000-9999

        $hasil = 7 . $year . $mo . $ran;

        if($this->input->method() == "post"){
            $dataPost = array (
                'update_id' => $hasil,
                'id' => $this->input->post('id'),
                'date' => $this->input->post('date'),
                'head' => $this->input->post('head'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
            );

            if($this->partisipan->update($dataPost)) {
                $data["message"] = "Sukses";
            } else {
                $data["message"] = "Gagal";
            }
        }
        $this->load->view("header");
        $this->load->view("newupdate", $data);
        $this->load->view("footer");
    }

    public function editprofile($id) 
    {
        $this->load->model("partisipan");
        $data['partisipan']=$this->partisipan->getInfo('id',$id);
        
        $thistime = date('Y-m-d H:i:s');
        
        if($this->input->post())
        {
            $datanew = array (
                'status' => $this->input->post('status'),
                'status_gizi' => $this->input->post('status_gizi'),
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

            $send = $this->partisipan->sendUpdates($id, $datanew);

            if($send) {
                $this->session->set_flashdata('success', 'Data berhasil diperbarui');
            }
        }
        $this->load->view('header');
        $this->load->view('edit_profile', $data);
        $this->load->view('footer');
    }

    
    public function editrecord($id) 
    {
        $this->load->model("partisipan");
        $records = array("record" => $this->partisipan->getRecords($id));
        
        $data = array();
        $datanew = array();
        foreach ($records as $rec) {
            //$count_records = sizeof($rec); 
            foreach ($rec as $r) {
                #echo "asd ";
                $datanew = array(
                    // loop here
                    $data = array(
                        'head' => $this->input->post('head'),
                        'weight' => $this->input->post('weight'),
                        'height' => $this->input->post('height')
                    )
                );
                
            }
            
        }

        if ($this->input->post()) {

            #print_r($datanew);
    
            #$send = $this->partisipan->sendRecords($id, $datanew);

        }

        $this->load->view('header');
        $this->load->view('record', $records);
        $this->load->view('footer');
    }

    public function delrecord($id)
    {
        $this->load->model("partisipan");
        $this->partisipan->delRecords($id);
        $x = current_url();
        redirect($_SERVER['HTTP_REFERER']); 
    }

    public function changerecord($id){
        $this->load->model("partisipan");
        $data['partisipan']=$this->partisipan->getInfo('id',$id);

    }
}