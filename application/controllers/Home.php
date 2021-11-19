<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home/index');
	}

	public function user_signup()
	{
		$this->load->view('home/user_signup');
	}

	public function user_signin()
	{
		$this->load->view('home/user_signin');
	}
	
	
}

?>