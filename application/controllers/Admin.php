<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//main model load
		$this->load->model('main','cm');
	}
	public function index()
	{
		if($this->session->userdata('admin_id') == ""){
			$this->load->view('admin/login');
		}
		else{
			return redirect('admin/dashboard');
		}
	}

	public function loggedin()
	{
		$args = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		];
		$result = $this->cm->login_auth('ms_admin',$args);
		if(count($result)){
			$admin_section_data = [
				'admin_id' => $result[0]->id,
				'admin_fullname' => $result[0]->fullname,
				'admin_username' => $result[0]->username,
			];
			$this->session->set_userdata($admin_section_data);
			$response = "1";
			echo $response;
		}
		else{
			$response = "0";
			echo $response;


		}
	}

	public function dashboard()
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$this->load->view('admin/dashboard');
		}
	}

	public function signout()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_username');
		$this->session->unset_userdata('admin_fullname');
		return redirect('admin/index');
	}
	
}

?>