<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//main model load
		$this->load->model('main','cm');
	}

	public function index()
	{
		$args = [
			'status' => '0'
		];
		$data['categories'] = $this->cm->fetch_records_by_args('ms_categories',$args);

		$this->load->view('home/index',$data);
	}

	public function user_signup()
	{
		$this->load->view('home/user_signup');
	}

	public function user_signin()
	{
		$this->load->view('home/user_signin');
	}

	public function carts()
	{
		$this->load->view('home/my_cart');
	}
	
	public function category()
	{
		$this->load->view('home/view_category');
	}
	public function product_detail()
	{
		$this->load->view('home/view_product');
	}

	public function dashboard()
	{
		$this->load->view('home/dashboard');
	}

	public function my_orders()
	{
		$this->load->view('home/my_orders');
	}
	
}

?>