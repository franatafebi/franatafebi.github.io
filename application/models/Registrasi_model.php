<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi_model extends CI_Model{
function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 }  