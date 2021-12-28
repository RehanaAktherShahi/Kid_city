<?php
class Main extends CI_Model
{
	public function login_auth($tablename,$args)
	{
		$fetch_rec = $this->db->get_where($tablename,$args);
		if($fetch_rec->num_rows() > 0){
			return $fetch_rec->result();
		}
		else{
			return $fetch_rec->result();
		}
	}
}