<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tabungan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_tabungan');
		$this->load->helper('url');

	}


	public function index()
	{
		$isi['content']		= 'admin/tabungan/content_tabungan';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Data tabungan';
		$isi['data'] 		= $this->db->get('tbl_user');
		$isi['data1']		= $this->Model_tabungan->get_data_tabungan();
		$this->db->Where('iduser', $this->session->userdata('iduser'));
		$isi['kt']			= $this->db->get('tbl_user');
		$this->load->view('admin/index',$isi);
	}



	public function tambah()
	{
		$isi['content']		= 'admin/tabungan/tambah_data';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Tambah Data tabungan';
		$isi['kampus']			= $this->Model_tabungan->get();
		$this->load->view('admin/index',$isi);
	}

	public function update($iduser)
	{
		$isi['content']		= 'admin/tabungan/update';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Update Data tabungan';
		$where 				= array('iduser' => $iduser);
		$isi['kampus']		= $this->Model_tabungan->edit_data($where,'tbl_user')->result();
		$this->load->view('admin/index',$isi);


	}

	public function simpan()
	{
		$iduser		= $this->input->post('iduser');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$saldo			= $this->input->post('saldo');
		$data = array(
					'iduser'			=> $iduser,
					'nama_lengkap'			=> $nama_lengkap,
					'saldo'					=> $saldo,
					

			);
		$this->Model_tabungan->input_data($data,'tbl_user');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data tabungan berhasil."); window.location.href="<?php echo base_url();?>Admin/Tabungan"</script> <?php
	}

	public function hapus($iduser)
	{
		$where = array('iduser' => $iduser);
		$this->Model_tabungan->hapus_data($where,'tbl_user');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data tabungan berhasil."); window.location.href="<?php echo base_url();?>index.php/Admin/Tabungan"</script> <?php
	}

	public function edit(){
		$iduser		= $this->input->post('iduser');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$saldo			= $this->input->post('saldo');
		$keaktifan			= $this->input->post('keaktifan');
		$data = array(
					'iduser'			=> $iduser,
					'nama_lengkap'			=> $nama_lengkap,
					'saldo'					=> $saldo,
					'keaktifan'					=> $keaktifan,
			);
	$where = array(
		'iduser' => $iduser
	);

	$this->Model_tabungan->update_data($where,$data,'tbl_user');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data tabungan berhasil."); window.location.href="<?php echo base_url();?>/Admin/Tabungan"
          </script> <?php
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */