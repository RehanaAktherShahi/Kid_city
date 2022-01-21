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

	public function add_category()
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$args = [
				'date>=' => date('Y-m-d',strtotime("-7 days"))
			];
			$data['categories'] = $this->cm->fetch_records_by_args('ms_categories',$args);
			$this->load->view('admin/add_category',$data);
		}
	}

	public function upload_category()
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$config = [
				'upload_path' => './uploads/category_image',
				'allowed_types' => 'jpg|jpeg|png|gif'
			];
			$this->load->library('upload',$config);

			$this->upload->do_upload('image');
			$img = $this->upload->data('file_name');
			$data = [
				'category_name' => $this->input->post('category_name'),
				'image' => $img,
				'status' => '0',
				'date' => date('Y-m-d')
			];
			if($data['category_name'] == "" && $data['image'] == "")
			{
				$this->session->set_flashdata('error', 'Please Enter Required Information.');
			}
			else
			{
				$result = $this->cm->insert_data('ms_categories',$data);
				if($result == true)
				{
					$this->session->set_flashdata('success', 'Congratulation ! Category Insert Successfully.' );
				}
				else{
					$this->session->set_flashdata('error','Fail ! Category Insert.');
				}

			}

			return redirect('admin/add_category');
		}
	}

	public function manage_category()
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$data['categories'] = $this->cm->fetch_all_records('ms_categories','desc','limit');
			$this->load->view('admin/manage_category',$data);
		}
	}
	
	public function delete_category($id = "")
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			if($id == ""){
				$this->session->set_flashdata('error','Please Pass Category Id.');
			}
			else{
				$args = [
					'id'  => $id
				];
				$result = $this->cm->delete_records_by_args('ms_categories',$args);
				if($result == true){
					$this->session->set_flashdata('success','Congratulation ! Category Delete Successfully.');
				}
				else{
					$this->session->set_flashdata('error','Fail ! Category Delete.');
				}
			}
			return redirect('admin/manage_category');
		}
	}

	public function edit_category($id = "")
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			if($id == ""){
				$this->session->set_flashdata('error','Please Pass Category Id.');
			}
			else{
				$args = [
					'id'  => $id
				];
				$data['category'] = $this->cm->fetch_records_by_args('ms_categories',$args);

				$args = [
					'date>=' => date('Y-m-d',strtotime("-7 days"))
				];
				$data['categories'] = $this->cm->fetch_records_by_args('ms_categories',$args);
				$this->load->view('admin/edit_category',$data);
			}
		}
	}

	public function update_category($id)
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$config = [
				'upload_path' => './uploads/category_image',
				'allowed_types' => 'jpg|jpeg|png|gif'
			];
			$this->load->library('upload',$config);
			//check image
			if($_FILES['image']['name'] == ""){

			}
			else{
				$args = [
					'id'  => $id
				];
				$old_data = $this->cm->fetch_records_by_args('ms_categories',$args);
				//delete old image
				unlink('uploads/category_image/'.$old_data[0]->image);
				//delete old image
				$this->upload->do_upload('image');
			    $img = $this->upload->data('file_name');
			    $data['image'] = $img;
			}
			
			$data['category_name'] = $this->input->post('category_name');
			if($data['category_name'] == "")
			{
				$this->session->set_flashdata('error', 'Please Enter Category Name.');
			}
			else
			{
			    $args = [
				'id' => $id
			    ];

			    $result = $this->cm->update_records_by_args('ms_categories',$data,$args);
				if($result == true)
				{
					$this->session->set_flashdata('success', 'Congratulation ! Category Update Successfully.' );
				}
				else{
					$this->session->set_flashdata('error','Fail ! Category Update.');
				}

			}

			
			return redirect('admin/edit_category/'.$id);
		}
	}

	public function search_category()
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$args = [
				'category_name' => $this->input->post('category_name')
			];

			$data['categories'] = $this->cm->fetch_records_by_args_with_like('ms_categories',$args);
			$this->load->view('admin/manage_category',$data);
		}
	}

	public function filter_category($filter)
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			if($filter == 'new_category'){
				$order = [
					'column_name' => 'id',
					'order'		 => 'desc'
				];

			}
			else if($filter == 'old_category'){
				$order = [
					'column_name' => 'id',
					'order'		 => 'asc'
				];

			}
			else if($filter == 'highest_products'){
				$order = [
					'column_name' => 'count_products',
					'order'		 => 'desc'
				];

			}
			else if($filter == 'lowest_products'){
				$order = [
					'column_name' => 'count_products',
					'order'		 => 'asc'
				];

			}
			else{
				$order = [
					'column_name' => 'id',
					'order'		 => 'desc'
				];

			}
			$data['categories'] = $this->cm->fetch_records_by_order('ms_categories',$order);
			$this->load->view('admin/manage_category',$data);

		}
	}

	public function add_product()
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$data['categories'] = $this->cm->fetch_all_records('ms_categories','desc','limit');
			$this->load->view('admin/upload_product',$data);
		}
	}

	public function save_product()
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$config = [
				'upload_path' => './uploads/product_image',
				'allowed_types' => 'jpg|jpeg|png|gif'
			];
			$this->load->library('upload',$config);
			$this->upload->do_upload('product_image');
			$img = $this->upload->data('file_name');
			$data = [
				'product_title' => $this->input->post('product_title'),
				'image'  => $img,
				'category_id' => $this->input->post('category_id'),
				'short_description' => $this->input->post('short_desc'),
				'color' => $this->input->post('color'),
				'size' => $this->input->post('size'),
				'price' => $this->input->post('price'),
				'status' => '0',
				'upload_date' => date('Y-m-d')
			];
			if($data['product_title'] == "" && $data['image'] == "" && $data['price'] == ""){
				$this->session->set_flashdata('error','Please Enter Required Information.');
			}
			else{
				$result = $this->cm->insert_data('ms_products',$data);
				if($result == true){
					$this->session->set_flashdata('success','Congratulation ! Product upload Successfully.');
				}
				else{
					$this->session->set_flashdata('error','Fail ! Product upload.');
				}
			}
			return redirect('admin/add_product');
		}
	}

	public function change_category_status($id,$status)
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$args = [
				'id'  => $id
			];
			$data = [
				'status' => $status
			];
			$result = $this->cm->update_records_by_args('ms_categories',$data,$args);
			if($result == true){
				$this->session->set_flashdata('success', 'Congratulation ! Category Status Update Successfully.' );
			}
			else{
				$this->session->set_flashdata('error', 'Fail ! Category Status Update.' );
			}
			return redirect('admin/manage_category');
			
		}
	}

	public function manage_products()
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			// create pagination
			$config['base_url'] = base_url('admin/manage_products');
			$config['per_page'] = 10;
			$config['total_rows'] = $this->db->count_all('ms_products');
			$this->load->library('pagination',$config);
			$order = [
				'column_name' => 'id',
				'order'       => 'desc'
			];
			$data['products'] = $this->cm->fetch_all_records_with_pagination('ms_products',$order,$config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/manage_products',$data);
		}
	}

	public function delete_product($id = 0)
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$args = [
				'id' => $id
			];
			$product = $this->cm->fetch_records_by_args('ms_products',$args);
			// delete image in folder
			unlink('uploads/product_image/'.$product[0]->image);
			// delete image in folder
			$result = $this->cm->
			delete_records_by_args('ms_products',$args);
			if($result == true){
				$this->session->set_flashdata('success', 'Congratulation ! Product Delete Successfully.' );
			}
			else{
				$this->session->set_flashdata('error', 'Fail ! Product Delete.' );
			}
			return redirect('admin/manage_products');
		}
	}

	public function change_product_status($id,$status)
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			$args = [
				'id' => $id
			];

			$data = [
				'status' => $status
			];
			$result = $this->cm->update_records_by_args('ms_products',$data,$args);
			if($result == true){
				$this->session->set_flashdata('success', 'Congratulation ! Product Status Update Successfully.' );
			}
			else{
				$this->session->set_flashdata('error', 'Fail ! Product Status Update.' );
			}
			return redirect('admin/manage_products');
		}
	}

	public function filter_product($filter)
	{
		if($this->session->userdata('admin_id') == "")
		{
			return redirect('admin/index');
		}
		else{
			if($filter == 'new_product'){
				$order = [
					'column_name' => 'id',
					'order'		 => 'desc'
				];

			}
			else if($filter == 'old_product'){
				$order = [
					'column_name' => 'id',
					'order'		 => 'asc'
				];

			}
			else if($filter == 'highest_price'){
				$order = [
					'column_name' => 'price',
					'order'		 => 'desc'
				];

			}
			else if($filter == 'lowest_price'){
				$order = [
					'column_name' => 'price',
					'order'		 => 'asc'
				];

			}
			else{
				$order = [
					'column_name' => 'id',
					'order'		 => 'desc'
				];

			}
			// create pagination
			$config['base_url'] = base_url('admin/filter_product/'.$filter);
			$config['per_page'] = 10;
			$config['total_rows'] = $this->db->count_all('ms_products');
			$this->load->library('pagination',$config);
			// create pagination
			$data['products'] = $this->cm->fetch_all_records_with_pagination('ms_products',$order,$config['per_page'],$this->uri->segment(4));
			$this->load->view('admin/manage_products',$data);
			
		}
	}
}

?>