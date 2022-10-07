<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		 parent::__construct();
		 $this->load->model('admin/Login_model','Login_model');		
			/*if(!$this->session->userdata('id'))
			 { 
			 redirect('admin/login');	
			 }	*/ 
	}



	// =========Go to the login form ================
	public function index()
	{

		if(isset($_POST['login']))
		 {		

			$this->form_validation->set_rules('username','User Name','required|is_unique[users.username]|min_length[5]');
			$this->form_validation->set_rules('password','password','required|is_unique[users.password]|min_length[5]');

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

				if(!$this->form_validation->run())
				{

					$username=$this->input->post('username');
					$password=$this->input->post('password');

					$login_id=$this->Login_model->is_Validate($username,$password);			
							if($login_id!='')
							{
								$this->session->set_userdata('id',$login_id);
								redirect('admin/login/dashboard');
							}
							else
							{
								echo "failed1";
								// redirect('admin/login');
							}
						
				} 
				else 
				{
					echo "failed2";
				 // redirect('admin/login/dashboard');
				}

			}
			else
			{
				
				$this->load->view('admin/login');
				
			}
	}


	
	// =========Go to the Dashboard ================
	public function dashboard()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/main');
		$this->load->view('admin/footer');
	}



	// =========Logout functionality ================

	public function logout()
	{
		
		$this->session->unset_userdata('id');
		 redirect('admin/login');
	}

	

	
}
