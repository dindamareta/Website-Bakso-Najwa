<?php

class Userlog extends CI_Model{
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function getDataUser($where){	
		$query = $this->db->get_where('user', $where)->result();

		foreach ($query as $data) {
			$data1 = 
			array(
				'username' => $data->username,
				'password'=> $data->password,
				'level' => $data->level
			);
		}
		return $data1;
	}
}