<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nasabah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_nasabah');
		$this->load->helper('url');

	}


	public function index()
	{
		$isi['content']		= 'admin/nasabah/content_nasabah';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Data nasabah';
		$this->db->Where('iduser', $this->session->userdata('iduser'));
		$isi['kt']			= $this->db->get('tbl_user');
		$isi['data'] 		= $this->db->get('tbl_user');
		$this->load->view('admin/index',$isi);
	}

	public function profil()
	{
		$isi['content']		= 'admin/nasabah/profil';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Profil';
		$this->db->Where('iduser', $this->session->userdata('iduser'));
		$isi['kt']			= $this->db->get('tbl_user');
		$this->load->view('admin/index',$isi);
	}

	public function detail($iduser)
	{
		$isi['content']		= 'admin/nasabah/detail';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Detail Data Nasabah';
		$where 				= array('iduser' => $iduser);
		$isi['nasabah']		= $this->Model_nasabah->edit_data($where,'tbl_user')->result();
		$this->load->view('admin/index',$isi);
	}

	public function gantipassword()
	{
		$isi['content']		= 'admin/nasabah/gantipassword';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Profil';
		$this->db->Where('iduser', $this->session->userdata('iduser'));
		$isi['kt']			= $this->db->get('tbl_user');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/nasabah/tambah_data';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Tambah Data Nasabah';
		$isi['kt']			= $this->db->get('tbl_user');
		$this->load->view('admin/index',$isi);
	}

	public function update($iduser)
	{
		$isi['content']		= 'admin/nasabah/update';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Update Data nasabah';
		$where 				= array('iduser' => $iduser);
		$isi['nasabah']		= $this->Model_nasabah->edit_data($where,'tbl_user')->result();
		$this->load->view('admin/index',$isi);
	}
	public function editlevelaktif($iduser)
	{
		
		$this->Model_nasabah->statusaktif($iduser,'tbl_user');
		 ?><script type="text/javascript">alert("Pengguna berhasil dikonfirmasil."); window.location.href="<?php echo base_url();?>/Admin/Nasabah"
          </script> <?php
	}
	public function editlevelnonaktif($iduser)
	{
		
		$this->Model_nasabah->statusnonaktif($iduser,'tbl_user');
		 ?><script type="text/javascript">alert("Pengguna Batal dikonfirmasi ."); window.location.href="<?php echo base_url();?>/Admin/Nasabah"
          </script> <?php
	}
	
	

	public function simpan()
	{
		$upload = $this->Model_nasabah->upload();
		$iduser 			= $this->input->post('iduser');
		$username 			= $this->input->post('username');
		$pekerjaan			= $this->input->post('pekerjaan');
		$status				= $this->input->post('status');
		$agama				= $this->input->post('agama');
		$ttl				= $this->input->post('ttl');	
		$password			= md5($this->input->post('password'));
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$jk					= $this->input->post('jk');
		$alamat				= $this->input->post('alamat');
		$no_telpon			= $this->input->post('notelpon');

		$data = array(
					'iduser'				=> $iduser,
					'ttl' 					=> $ttl,
					'username'				=> $username,
					'password' 				=> $password,
					'level' 				=> 1,
					'nama_lengkap' 			=> $nama_lengkap,
					'agama' 				=> $agama,
					'jk' 					=> $jk,
					'status' 				=> $status,
					'pekerjaan' 			=> $pekerjaan,
					'alamat'				=> $alamat,
					'notelpon' 				=> $no_telpon,
					'foto' 					=> $upload['file']['file_name'],
					

			);
		$this->Model_nasabah->input_data($data,'tbl_user');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data nasabah berhasil."); window.location.href="<?php echo base_url();?>Admin/Nasabah"</script> <?php
	}

	public function hapus($iduser)
	{
		$where = array('iduser' => $iduser);
		$this->Model_nasabah->hapus_data($where,'tbl_user');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data nasabah berhasil."); window.location.href="<?php echo base_url();?>index.php/Admin/Nasabah"</script> <?php
	}

	public function edit(){
		$iduser 			= $this->input->post('iduser');
		$pekerjaan			= $this->input->post('pekerjaan');
		$status			= $this->input->post('status');
		$agama			= $this->input->post('agama');
		$ttl			= $this->input->post('ttl');
		$password 		= md5($this->input->post('password'));
		$nama_lengkap			= $this->input->post('nama_lengkap');
		$jk						= $this->input->post('jk');
		$alamat					= $this->input->post('alamat');
		$no_telpon				= $this->input->post('notelpon');

		$data = array(
					'iduser'				=> $iduser,
					'ttl' 					=> $ttl,		
					'password' 					=> $password,
					'nama_lengkap' 			=> $nama_lengkap,
					'agama' 				=> $agama,
					'jk' 					=> $jk,
					'status' 				=> $status,
					'pekerjaan' 			=> $pekerjaan,
					'alamat'				=> $alamat,
					'notelpon' 				=> $no_telpon,
				
			);
	$where = array(
		'iduser' => $iduser
	);

	$this->Model_nasabah->update_data($where,$data,'tbl_user');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data nasabah berhasil."); window.location.href="<?php echo base_url();?>/Admin/Nasabah"
          </script> <?php
}

	public function editpassword(){
		
		
		
		$password_baru			= $this->input->post('password_baru');
		$konfirmasi_password	= $this->input->post('konfirmasi_password');
		
		$password 	= md5($this->input->post('password'));
		$cek 	= $this->Model_nasabah->cek_password($password);
		if($cek->num_rows() > 0){
					//kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database

					//membuat kondisi minimal password adalah 5 karakter
					
						//jika password baru sudah 5 atau lebih, maka lanjut ke bawah
						//membuat kondisi jika password baru harus sama dengan konfirmasi password
						if($password_baru == $konfirmasi_password){
							//jika semua kondisi sudah benar, maka melakukan update kedatabase
							//query UPDATE SET password = encrypt md5 password_baru
							//kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
							$password_baru 	= md5($password_baru);
							$iduser 		= $this->input->post('iduser'); //ini dari session saat login
							 //ini dari session saat login
							
							$update 		= $this->Model_nasabah->update($password_baru,$iduser);
							if($update){
								//kondisi jika proses query UPDATE berhasil
								?><script type="text/javascript">alert("Update Password Berhasil."); window.location.href="<?php echo base_url();?>/Admin/Nasabah"
          </script><?php
						}else{
							//kondisi jika password baru beda dengan konfirmasi password
							?><script type="text/javascript">alert("Gagal merubah password"); window.location.href="<?php echo base_url();?>/Admin/Nasabah/gantipassword"
          </script><?php
						}
						}else{
							//kondisi jika password baru beda dengan konfirmasi password
							?><script type="text/javascript">alert("Konfirmasi password tidak cocok"); window.location.href="<?php echo base_url();?>/Admin/Nasabah/gantipassword"
          </script><?php
						}
				}else{
					//kondisi jika password lama tidak cocok dengan data yang ada di database
					?><script type="text/javascript">alert("Password lama tidak cocok"); window.location.href="<?php echo base_url();?>/Admin/Nasabah/gantipassword"
          </script><?php
				}
		

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */