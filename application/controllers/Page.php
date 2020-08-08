<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Page extends CI_Controller{
  public function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('newdata') != TRUE){
      $url=base_url();
      redirect($url);
    }
  }

  public function index(){
    $this->load->view('admin/index');
  }

  public function menu(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/menu');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }

  }

  public function menu2(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='5'){
      $this->load->view('admin/menu2');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  public function menu3(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='6'){
      $this->load->view('admin/menu3');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
