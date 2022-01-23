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
		$args = [
			'session_id' => $this->session->userdata('session_id')
		];
		$data['products'] = $this->cm->fetch_records_by_args('ms_carts',$args);
		$this->load->view('home/my_cart',$data);
	}

	public function remove_product($product_id = 0)
	{
		$args = [
			'product_id' => $product_id,
			'session_id' => $this->session->userdata('session_id')
		];
		$result = $this->cm->delete_records_by_args('ms_carts',$args);
		if($result == true){
			$this->session->set_flashdata('success','Product Remove Successfully.');
		}
		else{
			$this->session->set_flashdata('error','Product Remove Fail.');
		}
		return redirect('home/carts');
	}

	public function update_quantity($quantity,$type,$product_id)
	{
		if($type == "add"){

			$new_qty = $quantity + 1;
			$args = [
				'product_id' => $product_id
			];

			$data = [
				'quantity' => $new_qty
			];
			$result = $this->cm->update_records_by_args('ms_carts',$data,$args);
		}
		else{
			if($quantity > 1 ){
				$new_qty = $quantity - 1;
				$args = [
					'product_id' => $product_id
				];

				$data = [
					'quantity' => $new_qty
				];
				$result = $this->cm->update_records_by_args('ms_carts',$data,$args);
				}
			else{
				$result = false;
			}
			
		}
		if($result == true){
			echo "1";
		}
		else{
			echo "0";
		}
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

	public function add_to_cart($product_id)
	{
		if ($this->session->userdata('session_id') == "") {
			$user_session_id = [
				'session_id' => rand(9999,999999)
			];
			$this->session->set_userdata($user_session_id);
		}
		else{
			//$session_id = $this->session->userdata('session_id');
		}
		$args = [
			'id' => $product_id
		];
		$product_details = $this->cm->fetch_records_by_args('ms_products',$args);

		$args = [
			'product_id'  => $product_id,
			'session_id'  => $this->session->userdata('session_id'),
		];
		$check_product = $this->cm->fetch_records_by_args('ms_carts',$args);
		if(count($check_product)){
			$old_qty = $check_product[0]->quantity;
			$new_qty = $old_qty + 1;
			$args = [
				'id' => $check_product[0]->id
			];
			$data = [
				'quantity'  => $new_qty
			];
			$result = $this->cm->update_records_by_args('ms_carts',$data,$args);
			if($result == true){
				echo "1";
			}
			else{
				echo "0";
			}
		}
		else{
			$data = [
			'product_id' => $product_details[0]->id,
			'session_id' => $this->session->userdata('session_id'),
			'product_name' => $product_details[0]->product_title,
			'quantity' => '1',
			'rate' => $product_details[0]->price
			];

			$result = $this->cm->insert_data('ms_carts',$data);
			if($result == true){
				echo "1";
			}
			else{
				echo "0";
			}
		}


	}
	
}

?>