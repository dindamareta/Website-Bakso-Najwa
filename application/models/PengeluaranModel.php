<?php 
 
class PemilikModel extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function getPemilik(){   
		$where = array(
				'level'=> 'pemilik'				
		);	
        $query = $this->db->get_where('users',$where);
        // Jika data lebih dari 0, return array
        if($query->num_rows() > 0 ) {
            $result = $query->result();
        } else {    
            $result = FALSE;
        }

        return $result;
    }	
	function getDataPemilik($where){	
		$query = $this->db->get_where('users', $where)->result();

		foreach ($query as $data) {
			$data1 = 
			array(
				'idUser' => $data->idUser,
				'username' => $data->username,
				'nama'=> $data->nama,
				'alamat' => $data->alamat,
				'nohp' => $data->nohp,
				'Level' => $data->level
			);
		}
		
		return $data1;
	}
	function updatePemilik($data){
		$table = 'users';
        $param = array(
            "username"=>$data['username'],
            "password"=>$data['password'],
            "nama"=>$data['nama'],
            "alamat"=>$data['alamat'],
            "nohp"=>$data['nohp']
        );
        $this->db->where('idUser', $data['idUser']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
	}
}