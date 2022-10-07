<?php 

class Register_model extends CI_Model
{
	public function regis_user($data)
	{
		return $this->db->insert('users',$data);
	}

}

?>