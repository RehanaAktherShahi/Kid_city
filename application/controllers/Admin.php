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

}

?>