<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Gallery extends CI_Controller {

  public function __construct()
  {
    parent::__construct();    
    $this->load->helper('url');

  }
  public function index()
  {
    $this->load->view('login');
  }
  public function gallery()
  {
    $isi['content']   = 'gallery';
    $isi['judul']   = 'Gallery Bank Sampah Junjung Birru';
    $isi['sub_judul'] = '';
    $this->load->view('login',$isi);
  }
  } 