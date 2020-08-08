<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penarikan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_transaksi');
		$this->load->helper('url');

	}


	public function index()
	{
		$isi['content']		= 'admin/penarikan/tambah_penarikan';
		$isi['judul']		= 'Transaksi';
		$isi['sub_judul']	= 'Penarikan';
		$isi['kampus']		= $this->Model_transaksi->get();
		$this->load->view('admin/index',$isi);
	}



	public function update($id_transaksi)
	{
		$isi['content']		= 'admin/penarikan/update';
		$isi['judul']		= 'Transaksi';
		$isi['sub_judul']	= 'Update Data penarikan';
		$where 				= array('id_penarikan' => $id_transaksi);
		$isi['penarikan']		= $this->Model_transaksi->edit_data($where,'tb_transaksi')->result();
		$this->load->view('admin/index',$isi);
	}

	public function simpan()
	{
		$id_transaksi		= $this->input->post('id_transaksi');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$petugas	= $this->input->post('petugas');
		$saldo	= $this->input->post('saldo');
		$jumlah_setoran	= 0;
		$jumlah_penarikan	= $this->input->post('jumlah_penarikan');
		$tanggal		= $this->input->post('tanggal');
		$tanggal 		= date('Y-m-d', strtotime($tanggal));
		$data 			= array(
					'id_transaksi'			=> $id_transaksi,
					'petugas'		=> $petugas,
					'nama_lengkap'		=> $nama_lengkap,
					'jumlah_penarikan'		=> $jumlah_setoran,
					'jumlah_penarikan'		=> $jumlah_penarikan,
					'tanggal'			=> $tanggal,
					'saldo'			=> $saldo,	
			
			);

		$this->Model_transaksi->input_data($data,'tb_transaksi');

		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data kampus berhasil."); window.location.href="<?php echo base_url();?>Admin/Penarikan"</script> <?php
	}

	public function hapus($id_transaksi)
	{
		$where = array('id_penarikan' => $id_transaksi);
		$this->Model_transaksi->hapus_data($where,'tb_transaksi');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data kampus berhasil."); window.location.href="<?php echo base_url();?>index.php/Admin/Penarikan"</script> <?php
	}

	public function edit(){
		$id_transaksi		= $this->input->post('id_penarikan');
		$petugas	= $this->input->post('petugas');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$jumlah_setoran	= 0;
		$jumlah_penarikan	= $this->input->post('jumlah_penarikan');
		$tanggal			= $this->input->post('tanggal');
		
		$data 			= array(
					'id_penarikan'			=> $id_transaksi,
					'petugas'		=> $petugas,
					'nama_lengkap'			=> $nama_lengkap,
					'jumlah_penarikan'		=> $jumlah_setoran,
					'jumlah_penarikan'		=> $jumlah_penarikan,
					'tanggal'			=> $tanggal,	
			);
	$where = array(
		'id_penarikan' => $id_transaksi
	);

	$this->Model_transaksi->update_data($where,$data,'tb_transaksi');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data penarikan berhasil."); window.location.href="<?php echo base_url();?>/Admin/Penarikan"
          </script> <?php
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */