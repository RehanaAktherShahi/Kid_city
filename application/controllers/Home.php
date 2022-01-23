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
	
	public function category_products($id = "")
	{
		$args = [
			'category_id' => $id
		];
		$data['products'] = $this->cm->fetch_records_by_args('ms_products',$args);
		$args = [
			'id' => $id
		];
		$data['category_detail'] = $this->cm->fetch_records_by_args('ms_categories',$args);
		$this->load->view('home/view_category',$data);
	}
	public function product_filter($id, $order)
	{
		if($order == "default")
		{
			$order_format = [
				'column_name' => 'id',
				'order'       => 'desc'

			];
		}
		else if($order == "best_metch"){
			$order_format = [
				'column_name' => 'count_sales',
				'order'       => 'desc'
			];
		}
		else if($order == "lowest_price"){
			$order_format = [
				'column_name' => 'price',
				'order'       => 'asc'
			];
		}
		else if($order == "highest_price"){
			$order_format = [
				'column_name' => 'price',
				'order'       => 'desc'
			];
		}
		else{
			$order_format = [
				'column_name' => 'id',
				'order'       => 'desc'
			];
		}

		$args = [
			'category_id' => $id
		];
		$data['products'] = $this->cm->fetch_records_by_args_with_order('ms_products',$args,$order_format);
		$args = [
			'id' => $id
		];
		$data['category_detail'] = $this->cm->fetch_records_by_args('ms_categories',$args);
		$this->load->view('home/view_category',$data);
	}
	public function product_detail($id = "")
	{
		$args = [
			'id' => $id
		];
		$data['product'] = $this->cm->fetch_records_by_args('ms_products',$args);
		$args = [
			'id!='        => $id,
			'category_id' => $data['product'][0]->category_id
		];
		$data['related_products'] = $this->cm->fetch_records_by_args_with_limit('ms_products',$args,'10');
		$this->load->view('home/view_product',$data);
	}

	public function dashboard()
	{
		$this->load->view('home/dashboard');
	}

	public function my_orders()
	{
		$this->load->view('home/my_orders');
	}
	public function get_product_details($product_id = 0)
	{
		$args = [
			'id'  => $product_id
		];
		$data['product'] = $this->cm->fetch_records_by_args('ms_products',$args);
		$this->load->view('home/view_product_details_modal',$data);
	}
	
}

?>