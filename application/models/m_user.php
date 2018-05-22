<?php

class M_user extends CI_Model{

	function getAdmin($table,$where){
		return $this->db->get_where($table,$where);
	}

	function getMember($table,$where){
		$query = $this->db->get_where($table,$where);
		var_dump($query);
	}
}
