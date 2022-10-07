<?php 
/*
|
|Front End page
|   

*/
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html','form');
		
		
	}

	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/main');
		$this->load->view('user/footer');
	}

	// public function home()
	// {

	// }

	public function about()
	{
		$this->load->view('user/header');
		$this->load->view('user/about');
		$this->load->view('user/footer');
	}

	public function service()
	{
		$this->load->view('user/header');
		$this->load->view('user/service');
		$this->load->view('user/footer');
	}


	public function blog()
	{
		$this->load->view('user/header');
		$this->load->view('user/blog');
		$this->load->view('user/footer');
	}

	public function blog_details()
	{
		$this->load->view('user/header');
		$this->load->view('user/blog_details');
		$this->load->view('user/footer');

	}

	public function contact()
	{
		$this->load->view('user/header');
		$this->load->view('user/contact');
		$this->load->view('user/footer');

	}

}


?>