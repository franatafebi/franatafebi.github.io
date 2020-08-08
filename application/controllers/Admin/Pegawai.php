<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_pegawai');
		$this->load->helper('url');

	}


	public function index()
	{
		$isi['content']		= 'admin/pegawai/content_pegawai';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Data pegawai';
		$this->db->Where('idadmin', $this->session->userdata('idadmin'));
		$isi['kt2'] 		= $this->db->get('tb_admin');
		$isi['data'] 		= $this->db->get('tb_admin');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/pegawai/tambah_data1';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Tambah Data pegawai';
		$isi['kt']			= $this->db->get('tb_admin');
		$this->load->view('admin/index',$isi);
	}
	
	public function update($idadmin)
	{
		$isi['content']		= 'admin/pegawai/update';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update Data pegawai';
		$where 				= array('idadmin' => $idadmin);
		$isi['pegawai']		= $this->Model_pegawai->edit_data($where,'tb_admin')->result();
		$this->load->view('admin/index',$isi);
	}

	public function simpan()
	{
		$upload = $this->Model_pegawai->upload();
		$idadmin 			= $this->input->post('idadmin');
		$nama_lengkap			= $this->input->post('nama_lengkap');
		$jk						= $this->input->post('jk');
		$alamat					= $this->input->post('alamat');
		$no_telpon				= $this->input->post('notelpon');
		$foto					= $this->input->post('foto');
		$password				= md5($this->input->post('password'));
		$username				= $this->input->post('username');
		$data = array(
					'idadmin'			=> $idadmin,
					'username'			=> $username,
					'password'			=> $password,
					'nama_lengkap' 		=> $nama_lengkap,
					'jk' 				=> $jk,
					'alamat'			=> $alamat,
					'notelpon' 			=> $no_telpon,
					'foto' 				=> $upload['file']['file_name'],
					'level'				=> 1,

			);
		$this->Model_pegawai->input_data($data,'tb_admin');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data pegawai berhasil."); window.location.href="<?php echo base_url();?>Admin/Pegawai"</script> <?php
	}

	public function hapus($idadmin)
	{
		$where = array('idadmin' => $idadmin);
		$this->Model_pegawai->hapus_data($where,'tb_admin');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data pegawai berhasil."); window.location.href="<?php echo base_url();?>index.php/Admin/Pegawai"</script> <?php
	}

	public function edit(){
		$idadmin 			 	= $this->input->post('idadmin');
		$nama_lengkap			= $this->input->post('nama_lengkap');
		$username				= $this->input->post('username');
		$password				= md5($this->input->post('password'));
		$jk						= $this->input->post('jk');
		$alamat					= $this->input->post('alamat');
		$no_telpon				= $this->input->post('notelpon');
		$foto					= $this->input->post('foto');

		$data = array(
					'idadmin'				=> $idadmin,
					'nama_lengkap' 			=> $nama_lengkap,
					'jk' 					=> $jk,
					'alamat'				=> $alamat,
					'notelpon' 				=> $no_telpon,
					
			);
	$where = array(
		'idadmin' => $idadmin
	);

	$this->Model_pegawai->update_data($where,$data,'tb_admin');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data pegawai berhasil."); window.location.href="<?php echo base_url();?>/Admin/Pegawai"
          </script> <?php
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */