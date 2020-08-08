<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_nasabah extends CI_Model{
	
	function tampil_data(){
		$query="SELECT A.*, B.saldo FROM  tbl_user A INNER JOIN  tb_tabungan B ON A.saldo=B.saldo";
		return $this->db->query($query);
	}


	function cek_password($password){
		$query = $this->db->query("SELECT password from tbl_user where password='$password'");
		return $query;
	}

	function update($password_baru,$iduser){
		$query = $this->db->query("UPDATE tbl_user SET password='$password_baru' WHERE iduser='$iduser'");
		return $query;
	}
	function statusaktif($iduser){
		$query="UPDATE tbl_user set level=1 where iduser='$iduser'";
		return $this->db->query($query);
	}
	function statusnonaktif($iduser){
		$query="UPDATE tbl_user set level=0 where iduser='$iduser'";
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
	function get_ktgori(){
		return $this->db->get('kategori');
		}	
			
	function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2000000000';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */