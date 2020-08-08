<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sampah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_sampah');
		$this->load->helper('url');

	}


	public function index()
	{
		$isi['content']		= 'admin/sampah/content_sampah';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Data sampah';
		$isi['data'] 		= $this->db->get('tb_sampah');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/sampah/tambah_data';
		$isi['judul']		= 'Data Master';
		$isi['sub_judul']	= 'Tambah Data sampah';
		$isi['kt']			= $this->db->get('tb_sampah');
		$this->load->view('admin/index',$isi);
	}
	
	public function update($id_sampah)
	{
		$isi['content']		= 'admin/sampah/update';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update Data sampah';
		$where 				= array('id_sampah' => $id_sampah);
		$isi['sampah']		= $this->Model_sampah->edit_data($where,'tb_sampah')->result();
		$this->load->view('admin/index',$isi);
	}

	public function simpan()
	{
		
		$id_sampah 			= $this->input->post('id_sampah');
		$nama_sampah			= $this->input->post('nama_sampah');
		$harga						= $this->input->post('harga');
		

		$data = array(
					'id_sampah'			=> $id_sampah,
					'nama_sampah' 			=> $nama_sampah,
					'harga' 					=> $harga,
					

			);
		$this->Model_sampah->input_data($data,'tb_sampah');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Tambah data sampah berhasil."); window.location.href="<?php echo base_url();?>Admin/Sampah"</script> <?php
	}

	public function hapus($id_sampah)
	{
		$where = array('id_sampah' => $id_sampah);
		$this->Model_sampah->hapus_data($where,'tb_sampah');
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("hapus data sampah berhasil."); window.location.href="<?php echo base_url();?>index.php/Admin/Sampah"</script> <?php
	}

	public function edit(){
		$id_sampah 			= $this->input->post('id_sampah');
		$nama_sampah			= $this->input->post('nama_sampah');
		$harga						= $this->input->post('harga');
		

		$data = array(
					'id_sampah'			=> $id_sampah,
					'nama_sampah' 			=> $nama_sampah,
					'harga' 					=> $harga,
					

			);
	$where = array(
		'id_sampah' => $id_sampah
	);

	$this->Model_sampah->update_data($where,$data,'tb_sampah');
	?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Update data sampah berhasil."); window.location.href="<?php echo base_url();?>/Admin/Sampah"
          </script> <?php
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */