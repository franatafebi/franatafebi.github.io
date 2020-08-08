<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_cpi extends CI_Model{

	function simpan_berita($jdl,$berita,$gambar){
		$hsl=$this->db->query("INSERT INTO tb_berita (judul_berita,isi_berita,foto) VALUES ('$jdl','$berita','$gambar')");
		return $hsl;
	}

	function metode_cpi(){
		$oke = $this->db->query("SELECT * FROM tbl_user WHERE saldo>25000");
		return $oke;

	}
	function get2(){
		$oke = $this->db->query("SELECT MIN(tbl_user.saldo) FROM tbl_user WHERE tbl_user.saldo>25000");
		return $oke;

	}
	function get1(){
		$this->db->select_min("saldo");
		$query = $this->db->get("tbl_user");
		return $query->num_rows();
		
	}
	function report(){
        $query = $this->db->query("SELECT * from tbl_user");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	function get_all_berita(){
		$hsl=$this->db->query("SELECT * FROM tb_berita ORDER BY id_berita DESC");
		return $hsl;
	}
	function edit($where,$wheree,$table){	
	$query = $this->db->get_where($table,$wheree,$where);
	return $query;
	}
}