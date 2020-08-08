<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setoran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_transaksi');
		$this->load->helper('url');


	}


	public function get_subkategori(){
		$iduser=$this->input->post('iduser');
		$data=$this->Model_transaksi->get_subkategori($iduser);
		echo json_encode($data);
	}
	public function index()
	{
		$isi['content']		= 'admin/setoran/tambah_setoran';
		$isi['judul']		= 'Transaksi';
		$isi['sub_judul']	= 'Tambah Data setoran Barang';
		$isi['kampus']		= $this->Model_transaksi->get();
		$isi['kampus1']		= $this->Model_transaksi->get1();
		$isi['perkiraan']	= $this->db->get('tb_sampah'); 
		$this->load->view('admin/index',$isi);
	}
	
	public function get_barang(){
        $id_sampah=$this->input->post('id_sampah');
        $data=$this->Model_transaksi->get_data_barang_bykode($id_sampah);
        echo json_encode($data);
    }

	public function update($id_transaksi)
	{
		$isi['content']		= 'admin/setoran/updatesetoran';
		$isi['judul']		= 'Transaksi';
		$isi['sub_judul']	= 'Update Data setoran';
		$where 				= array('id_transaksi' => $id_transaksi);
		$isi['setoran']		= $this->Model_transaksi->edit_data($where,'tb_transaksi')->result();
		$isi['kampus']		= $this->Model_transaksi->get();
		$this->load->view('admin/index',$isi);
	}

	public function simpan()
	{
		$id_transaksi		= $this->input->post('id_transaksi');
		$nama_petugas	= $this->input->post('petugas');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$jumlah_setor	= $this->input->post('jumlah_setor');
		$jumlah_penarikan	= 0;
		$tanggal		= $this->input->post('tanggal');
		$tanggal 		= date('Y-m-d', strtotime($tanggal));

		$saldo		= $this->input->post('saldo');
		$abasen		= 1;
		$data 			= array(
					'id_transaksi'			=> $id_transaksi,
					'petugas'			=> $nama_petugas,
					'nama_lengkap'		=> $nama_lengkap,
					'jumlah_setor'		=> $jumlah_setor,
					'jumlah_penarikan'		=> $jumlah_penarikan,
					'keaktifan'			=> $abasen,
					'tanggal'			=> $tanggal,
					'saldo'			=> $saldo,	
			
			);

		$this->Model_transaksi->input_data($data,'tb_transaksi');

		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data kampus berhasil."); window.location.href="<?php echo base_url();?>Admin/Setoran"</script> <?php
	}

	public function hapus($id_transaksi)
	{
		$where = array('id_transaksi' => $id_transaksi);
		$this->Model_transaksi->hapus_data($where,'tb_transaksi');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data kampus berhasil."); window.location.href="<?php echo base_url();?>index.php/Admin/Setoran"</script> <?php
	}

	public function edit(){
		$id_transaksi		= $this->input->post('id_transaksi');
		$nama_lengkap	= $this->input->post('nama_lengkap');
		$nama_petugas	= $this->input->post('petugas');
		$jumlah_setor	= $this->input->post('jumlah_setor');
		$jumlah_penarikan	= 0;
		$tanggal			= $this->input->post('tanggal');
		
		$data 			= array(
					'id_transaksi'			=> $id_transaksi,
					'petugas'			=> $nama_petugas,
					'nama_lengkap'		=> $nama_lengkap,
					'jumlah_setor'		=> $jumlah_setor,
					'jumlah_penarikan'		=> $jumlah_penarikan,
					'tanggal'			=> $tanggal,	
			);
	$where = array(
		'id_transaksi' => $id_transaksi
	);

	$this->Model_transaksi->update_data($where,$data,'tb_transaksi');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data setoran berhasil."); window.location.href="<?php echo base_url();?>/Admin/Setoran"
          </script> <?php
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */