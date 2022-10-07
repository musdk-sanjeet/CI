<?php 
class Login_model extends CI_Model 
{

	public function is_Validate($username,$password)
	{
		$this->db->where(['username'=>$username,'password'=>$password,'status'=>'1']);
		// $this->db->where(['password'=>$password]);
		// $this->db->where('status','1');
		$val_query=$this->db->get('users');

		if($val_query->num_rows())
		{
			return $val_query->row()->id;
		}
		else
		{
			return false;
		}
	}



}





?>