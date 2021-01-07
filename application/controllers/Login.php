<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }
 
  function index(){
    $this->load->view('login-header');
    $this->load->view('login');
    $this->load->view('footer');
  }
 
  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_firstname'];
        $email = $data['user_email'];
        $level = $data['user_category'];
        $tag = $data['tag'];
        $sesdata = array(
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'tag'       => $tag,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === 'DINKES'){
            redirect('home');
 
        // access login for puskesmas
        }elseif($level === 'PUSKESMAS'){
            redirect('home');
 
        // access login for bidan
        }else{
            redirect('home');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 
}