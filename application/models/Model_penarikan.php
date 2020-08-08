<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_penarikan extends CI_Model{
	function tampil_data(){
		$query="SELECT A.*, B.nama_lengkap, FROM tbl_user A INNER JOIN tb_penarikan B ON A.nama_lengkap=B.nama_lengkap";
		return $this->db->query($query);
	}
	

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function get(){
		
		return $this->db->get('tbl_user');
	}

	//fungsi untuk menampilkan semua data dari tabel database
 	function get_allimage() {
        $this->db->from($this->tabel);
 		$query = $this->db->get();
        return $query->result();
 	}
	//fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
	function view(){
		return $this->db->get('tb_penarikan');
	}
	function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		$this->upload->do_upload('fotobarang'); // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			
		
	}
	function add($data,$qty_old_product){

      $sisa_saldo = $qty_old_product['saldo'] + $jumlah_setor;
      $sql2 = "UPDATE tb_tabungan SET saldo = '$sisa_saldo'WHERE id_tabungan = '$nama_nasabah'";
      $this->db->query($sql2);

    }
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */