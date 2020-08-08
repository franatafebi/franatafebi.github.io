<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_laporan_cpi extends CI_Model{


	function metode_cpi(){
		$oke = $this->db->query("SELECT * FROM 'tb_tabungan' ORDER BY 'tb_tabungan'.'saldo' DESC LIMIT 2"); 

		return $oke->result();

	}
	function get1(){
		$this->db->select_min("saldo");
		$query = $this->db->get("tb_tabungan");
		return $query->num_rows();
		
		

	}
}