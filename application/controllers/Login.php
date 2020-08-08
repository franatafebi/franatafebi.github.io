<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function __construct(){
		parent::__construct();
		//load Login_model.php	
		$this->load->model('Login_model');
		//check the email is already set up or not
		if ($this->session->userdata('username')) {
			//if email is already set up, then check the level of email is admin or member
			if($this->session->userdata('level') == '1'){
				redirect('Admin/Admin');
			}elseif($this->session->userdata('level') == '0'){
					redirect('login');
			}elseif($this->session->userdata('level') == '3'){
				redirect('yayasan/yayasan');
			}elseif($this->session->userdata('level') == '4'){
				redirect('biroadm/biroadm');
			}elseif($this->session->userdata('level') == '5'){
				redirect('user/user');
			}
		}
	}
 
	public function index(){
		$data = array('error' => ''
					);

		$this->load->view('login',$data);
	}

	public function beranda()
		  {
		    $isi['content']   = 'isi';
		    $isi['judul']   = 'Beranda';
		    $isi['sub_judul'] = 'Home';
		    $this->load->view('login',$isi);
		  }
	public function masuk()
		  {
		    $isi['content']   = 'masuk';
		    $isi['judul']   = 'Login';
		    $isi['sub_judul'] = '';
		    $this->load->view('login',$isi);
		  }
	public function kontak()
		  {
		    $isi['content']   = 'kontak';
		    $isi['judul']   = 'Kontak';
		    $isi['sub_judul'] = 'Home';
		    $this->load->view('login',$isi);
		  }
	public function profil()
		  {
		    $isi['content']   = 'Profil';
		    $isi['judul']   = 'Profil Bank Sampah Junjung Birru';
		    $isi['sub_judul'] = '';
		    $this->load->view('login',$isi);
		  }
 
	//function for processing login form
	public function login_process(){
		$username 		= $this->input->post('username');
		$password 	= md5($this->input->post('password'));
					//calling chech_user() function in Login_model.php
		$user = $this->Login_model->check_user($username, $password); 
		if($user->num_rows() > 0){
			foreach ($user->result() as $row) {
				$iduser 			= $row->iduser;
				$username 			= $row->username;
				$nama_lengkap		= $row->nama_lengkap;
				$jk					= $row->jk;
				$alamat				= $row->alamat;
				$notelpon			= $row->notelpon;
				$level				= $row->level;
				$foto				= $row->foto;
				$saldo				= $row->saldo;
				$keaktifan			= $row->keaktifan;
			}
 
			$newdata = array(
			        'iduser'  		=> $iduser,
			        'username' 		=> $username,
			        'nama_lengkap'	=> $nama_lengkap,
			        'jk'			=> $jk,
			        'alamat'		=> $alamat,
			        'notelpon'		=> $notelpon,
			        'level'			=> $level,
			        'foto'			=> $foto,
			        'saldo'			=> $saldo,
			        'keaktifan'		=> $keaktifan,
			        'logged_in' 	=> TRUE
			);
	
			
			//set up session data
				$this->session->set_userdata($newdata);
				if($this->session->userdata('level') == '1'){
					$this->session->set_userdata('akses','1');
		            redirect('Admin/Admin');

				}elseif($this->session->userdata('level') == '0'){
					?><script type="text/javascript">alert("Maaf email anda belum dikonfirmasi."); window.location.href="<?php echo base_url();?>index.php/Admin/Admin/logout"</script><?php
				}elseif($this->session->userdata('level') == '3'){
					redirect('yayasan/yayasan');
				}elseif($this->session->userdata('level') == '4'){
					redirect('biroadm/biroadm');
				}elseif($this->session->userdata('level') == '5'){
					redirect('user/user');
				}
		}else{	


		$username 		= $this->input->post('username');
		$password 	= md5($this->input->post('password'));
		$admin = $this->Login_model->check_admin($username, $password); 
 
		if($admin->num_rows() > 0){
			foreach ($admin->result() as $row) {
				$idadmin 			= $row->idadmin;
				$username 			= $row->username;
				$nama_lengkap		= $row->nama_lengkap;
				$jk					= $row->jk;
				$alamat				= $row->alamat;
				$notelpon			= $row->notelpon;
				$level				= $row->level;
				$foto				= $row->foto;
			}
 
			$newdata = array(
			        'idadmin'  		=> $idadmin,
			        'username' 		=> $username,
			        'nama_lengkap'	=> $nama_lengkap,
			        'jk'			=> $jk,
			        'alamat'		=> $alamat,
			        'notelpon'		=> $notelpon,
			        'level'			=> $level,
			        'foto'			=> $foto,
			        'logged_in' 	=> TRUE
			);
			
			//set up session data
				$this->session->set_userdata($newdata);
				if($this->session->userdata('level') == '1'){
					redirect('Admin/Admin');
				}elseif($this->session->userdata('level') == '0'){
					redirect('login');
				}elseif($this->session->userdata('level') == '3'){
					redirect('yayasan/yayasan');
				}elseif($this->session->userdata('level') == '4'){
					redirect('biroadm/biroadm');
				}elseif($this->session->userdata('level') == '5'){
					$this->session->set_userdata('akses','5');
		            $this->session->set_userdata('ses_id',$data['idadmin']);
		            $this->session->set_userdata('ses_nama',$data['username']);
		            redirect('Page');
				}
		}else {
				?>
					<script type="text/javascript">alert("Maaf email atau password anda salah."); window.location.href="<?php echo base_url();?>index.php/Login/beranda"</script><?php
			}
		}
	}
}
