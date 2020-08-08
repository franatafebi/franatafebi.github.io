<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Registrasi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();    
    $this->load->model('Registrasi_model');
    $this->load->helper('url');

  }
  public function index()
  {
    $this->load->view('login');
  }
  public function registrasi()
  {
    $isi['content']   = 'registration';
    $isi['judul']   = 'Data Master';
    $isi['sub_judul'] = 'Pendaftaran';
    $isi['kt']      = $this->db->get('tbl_user');
    $this->load->view('login',$isi);
  }
  public function daftar()
  {
    $iduser   = $this->input->post('iduser');
    $fname = $this->input->post('fname');
    $lname = $this->input->post('lname');
    $username  = $this->input->post('username');
    $password   = md5($this->input->post('password'));
    $nama_lengkap   = $this->input->post('nama_lengkap');
    $level  = 1;
    $jk   = $this->input->post('jk');
    $foto         = "abc.jpg";
    $saldo         = 1000;
    $keaktifan         = 1;
    
    $data = array(
          'iduser'      => $iduser,
          'fname'      => $fname,
          'lname'      => $lname,
          'nama_lengkap'     => $nama_lengkap,
          'username'      => $username,
          'password'      => $password,
          'jk'      => $jk,
          'foto'          => $foto,

         

      );
    $this->Registrasi_model->input_data($data,'tbl_user');
    ?>
      <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Registrasi berhasil"); window.location.href="<?php echo base_url();?>index.php/Beranda/beranda"</script> <?php
  }
  } 