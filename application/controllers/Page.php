<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='DINKES'){
          echo "Welcome to Dinas Kesehatan";
          $this->load->view('home');
      }else{
          echo "Access Denied";
      }
 
  }
 
  function staff(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='PUSKESMAS'){
        $this->load->view('home');
        echo "Welcome to Puskesmas";
    }else{
        echo "Access Denied";
    }
  }
 
  function author(){
    //Allowing akses to author only
    if($this->session->userdata('level')==='BIDAN'){
        $this->load->view('home');
        echo "Welcome Bidan";
    }else{
        echo "Access Denied";
    }
  }
 
}