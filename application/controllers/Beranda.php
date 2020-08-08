<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Beranda extends CI_Controller {

  public function __construct()
  {
    parent::__construct();    
    $this->load->helper('url');

  }
  public function index()
  {
    $this->load->view('login');
  }
  public function beranda()
  {
    $isi['content']   = 'isi';
    $isi['judul']   = 'Beranda';
    $isi['sub_judul'] = 'Home';
    $this->load->view('login',$isi);
  }
  } 