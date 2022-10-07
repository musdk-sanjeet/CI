<?php 

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/User_model','user_model');
		if(!$this->session->userdata('id'))
		{
			redirect('admin/User');
		}
	}
	public function index()
	{
		$data['users']=$this->user_model->user_list();	
		$this->load->view('admin/header');
		$this->load->view('admin/users_list',$data);
		
	}


	

	

	function change_status() {

		$id = $this->input->post('id');
		$status = $this->input->post('status');

		if($status == 'active') {

			$result = $this->db->query("UPDATE users SET status ='0' WHERE id='".$id."'");
		} else {
			$result = $this->db->query("UPDATE users SET status ='1' WHERE id='".$id."'");
		}

		echo $result;
	}

	public function add_user()
	{
		$this->load->view('admin/add_user');

	}

	public function edit_user()
	{

	}

	public function del_user($id)
	{
		// $id=$this->input->post('id');
		$res=$this->user_model->del_model($id);
		if($res==true)
		{
			$this->load->view('admin/user_list');
		}
		else
		{
			$this->load->view('admin/user_list');
		}

	}






}