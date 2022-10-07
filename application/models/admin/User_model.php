<?php 
class User_model extends CI_Model
{

	public function user_list()
	{
		$this->db->select('users.id,users.firstname,users.email,users.status');
		$this->db->from('users');
		$user_query=$this->db->get()->result_array();
		return $user_query;

	}
	public function add_model()
	{
		
	}

	public function del_model($id)
	{
		$this->db->where('id',$id);
		// $this->db->set('role',0);
		return $this->db->delete('users');

	}
}



?>