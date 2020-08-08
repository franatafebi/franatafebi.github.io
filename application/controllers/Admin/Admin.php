<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Admin extends CI_Controller { 
 
    public function __construct(){         
        parent::__construct();         
        if ($this->session->userdata('username')=="") {             
            redirect('Login'); 
        } 
     
        $this->load->model('Model_user'); 
        $this->load->helper('url'); 
    }       
    public function index() { 
        $isi = array( 
                    'error' => '', 
                    'username' => $this->session->userdata('username') 
                ); 
        $isi['content']      = 'admin/isi';  
        $isi['judul']        = 'Dashboard ';  
        $isi['sub_judul']    = 'Home';
        $this->load->view('admin/index',$isi); 
    }
         
    public function logout() { 
        $this->session->unset_userdata('username');         
        $this->session->unset_userdata('level_user');         
        session_destroy();        
        redirect('Login/beranda'); 
    } 
} 
