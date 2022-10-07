<?php 
class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin/Register_model','Register_model');
		
	}


	// =========Go to the Register form ================
	public function index()
	{
		if(isset($_POST['register']))
		{
		$name=$this->input->post('uname');
		$firstname=$this->input->post('fname');
		$lastname=$this->input->post('lname');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$cpassword=$this->input->post('cpassword');
		

		$this->form_validation->set_rules('uname','username','required|min_length[5]');
		$this->form_validation->set_rules('fname','firstname','required');
		$this->form_validation->set_rules('lname','lastname','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('cpassword','confirm_password','required|matches[password]');
		
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		{
			$data=array(
				'username'=>$name,
				'password'=>$password,
				'cpass'=>$cpassword,
				'firstname'=>$firstname,
				'lastname'=>$lastname,
				'email'=>$email
			);

			 $regis_status=$this->Register_model->regis_user($data);

			if($regis_status)
			{
				$this->load->view('admin/login');
			}
			else
			{
				$this->load->view('admin/register');

			}
			
		
		}
		else
		{
			$this->load->view('admin/register');
		}
	} else {

		$this->load->view('admin/register');
	}

	}


}


?>