<?php 
class Login_model extends CI_Model{
 
	public function __construct(){
		parent::__construct();	
	}
 
	public function check_user($username, $password) {
		$query = $this->db->query("select * from tbl_user where username='$username' AND password='$password' limit 1");
		return $query;
	}
	public function check() {
		$query = $this->db->query("select * from tb_tabungan");
		return $query;
	}
	public function check_admin($username, $password) {
		$query = $this->db->query("select * from tb_admin where username='$username' AND password='$password' limit 1");
		return $query;
	}
}