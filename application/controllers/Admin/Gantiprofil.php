<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Gantiprofil extends CI_Controller {

  public function __construct()
  {
    parent::__construct();    
    $this->load->helper('url');
    $this->load->model('Model_pegawai');

  }
  public function index()
  {
   $isi['content']      = 'admin/gantiprofil';  
        $isi['judul']        = 'Dashboard ';  
        $isi['sub_judul']    = 'Home';
        $this->load->view('admin/index',$isi); 
  }
  public function edit(){
      $upload = $this->Model_pegawai->upload();
      $idadmin = $this->input->post('idadmin');

      $data = array(
            'idadmin'      => $idadmin,
            'foto'        => $upload['file']['file_name'],
          
        );
    $where = array(
      'idadmin' => $idadmin
    );

    $this->Model_pegawai->update_data($where,$data,'tb_admin');
    ?>
        <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
            <script type="text/javascript">alert("Update data nasabah berhasil."); window.location.href="<?php echo base_url();?>/Admin/Pegawai"
            </script> <?php
  }
  public function edituser(){
      $upload = $this->Model_pegawai->upload();
      $iduser = $this->input->post('iduser');

      $data = array(
            'iduser'      => $iduser,
            'foto'        => $upload['file']['file_name'],
          
        );
    $where = array(
      'iduser' => $iduser
    );

    $this->Model_pegawai->update_data($where,$data,'tbl_user');
    ?>
        <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
            <script type="text/javascript">alert("Update data nasabah berhasil."); window.location.href="<?php echo base_url();?>/Admin/Admin"
            </script> <?php
  }
  } 