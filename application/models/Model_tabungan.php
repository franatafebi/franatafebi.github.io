<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_tabungan extends CI_Model{
	function tampil_data(){
		$query="SELECT A.*, B.nama_lengkap FROM  tbl_user A INNER JOIN  tb_tabungan B ON A.nama_lengkap=B.nama_lengkap";
		return $this->db->query($query);
	}
	function get_data_tabungan(){
        $query = $this->db->query("SELECT nama_lengkap, SUM(saldo) AS saldo FROM tbl_user GROUP BY nama_lengkap");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function get_data(){
      $this->db->select('nama_lengkap,saldo,keaktifan');
      $result = $this->db->get('tbl_user');
      return $result;
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
	function get(){
		return $this->db->get('tbl_user');
	

	}
	function  get_product($id_tabungan){
      $query = $this->db->query("SELECT * FROM tb_tabungan WHERE id_tabungan = '$id_tabungan'");
      return $query->row_array();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */