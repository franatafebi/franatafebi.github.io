<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_lprpenarikan extends CI_Model{
	
	function view_by_date($date){
        $this->db->where('DATE(tanggal)', $date); // Tambahkan where tanggal nya
        
    return $this->db->get('tb_penarikan')->result();// Tampilkan data tb_penarikan sesuai tanggal yang diinput oleh user pada filter
  }
    
	function view_by_month($month, $year){
        $this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
        
    return $this->db->get('tb_penarikan')->result(); // Tampilkan data tb_penarikan sesuai bulan dan tahun yang diinput oleh user pada filter
  }
    
 	function view_by_year($year){
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
        
    return $this->db->get('tb_penarikan')->result(); // Tampilkan data tb_penarikan sesuai tahun yang diinput oleh user pada filter
  }
    
 	function view_all(){
    return $this->db->get('tb_penarikan')->result(); // Tampilkan semua data tb_penarikan
  }
    
   	function option_tahun(){
        $this->db->select('YEAR(tanggal) AS tahun'); // Ambil Tahun dari field tanggal
        $this->db->from('tb_penarikan'); // select ke tabel tb_penarikan
        $this->db->order_by('YEAR(tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal)'); // Group berdasarkan tahun pada field tanggal
        
        return $this->db->get()->result(); // Ambil data pada tabel tb_penarikan sesuai kondisi diatas
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */