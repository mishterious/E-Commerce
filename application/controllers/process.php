<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function index()
	{
		$this->load->model('E_model');
		$array['name'] = $this->E_model->get_distinct_category();
		$array['products'] = $this->E_model->get_all_products();
		$this->load->view('products', $array);
	}
	public function description($id)
	{
		$this->load->model('E_model'); 
		$array['id'] = $this->E_model->get_product_by_id($id); 

		$this->load->view('description', $array);
	}
	public function cart()
	{
		$this->load->model('E_model');
		$product_id = $this->input->post('hidden');
		$quantity = $this->input->post('quantity');

		$product = $this->E_model->get_product_by_id($product_id);

		$total = $product['price'] * $quantity;

		if(!$this->session->userdata('cart')){

		$array[$product_id] = array(
			"id" => $product_id, 
			"name" => $product['name'],
			"price" => $product['price'],
			"quantity" => $quantity,
			"total" => $total
			);
		} 
		else{
		$array[$product_id] = array(
			"id" => $product_id, 
			"name" => $product['name'],
			"price" => $product['price'],
			"quantity" => $quantity,
			"total" => $total
			);
		}
		$this->session->set_userdata('cart', $array);
		$this->load->view('user_cart');
	}

	public function customer_info()
	{
		$id = $this->input->post();
	}

	public function send_product($category)
	{
		$this->load->model('E_model'); 
		$array['name'] = $this->E_model->get_distinct_category();
		$array['products'] = $this->E_model->get_product_by_category($category);
		$this->load->view( 'products', $array);	
	}





	public function login()
	{
		$this->load->view('login');
	}

	public function admin_login()
	{
		$this->load->model("E_model");
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// $password = md5($prepass);

		$this->load->library("form_validation");
		$this->form_validation->set_rules('email','E-mail','required|max_length[30]|valid_email');
		$this->form_validation->set_rules('password','Password','required|min_length[6]|alpha_numeric');

		if ($this->form_validation->run() === FALSE)
		{
			echo (validation_errors());
		}
		else
		{	
			$array['email'] = $this->E_model->get_admin_by_email($email);
			$id = '1';
			$array['orders'] = $this->E_model->get_all_dashboard($id);
						
			if(!$array['email']['password'] == $password)
			{
				redirect(base_url());
				die("The submitted informaition does not match information in our database.");
			}
			else
			{
				$this->load->view('dashboard', $array);
			}
		}
	}

	public function update_status()
	{
		$this->load->model("E_model");

		$id = $this->input->post('order_id');
		$status = $this->input->post('status');

		if(!$id === false)
		{
			$update = array(
				'status' => $status,
				'updated_at' => date("Y-m-d"),
				'id' => $id
				);

			$update_status = $this->E_model->update_status($update);
			$id = '1';
			$array['orders'] = $this->E_model->get_all_dashboard($id);

			$this->load->view('dashboard', $array);
		}
		else{

			redirect(dashboard);
		}
	}

	public function inventory()
	{
		$this->load->model("E_model");
		$array['products'] = $this->E_model->get_all_products();
		$this->load->view('inventory', $array);
	}

	public function dashboard()
	{
		$this->load->model("E_model");
		$array['orders'] = $this->E_model->get_all_dashboard();
		$this->load->view('dashboard', $array);
	}


	public function edit_product()
	{
		$this->load->model("E_model");
		$id = $this->input->post();		
		$array['product'] = $this->E_model->get_product_by_id($id);
		$array['categories'] = $this->E_model->get_all_category(); 
		$this->load->view('edit_product', $array);
	}

	public function edit_product_by_id()
	{
		$this->load->model("E_model");
		$update = $this->input->post();
		
		$id = array(
				'name' => $update['product_name'],
				'description' =>  $update['description'],
				'category' => $update['new_category'],
				'picture1' =>  $update['picture1'],
				'picture2' => $update['picture2'],
				'picture3' => $update['picture3'],
				'updated_at' => date("Y-m-d"),
				'id' => $update['product_id']
				);

		$update_product = $this->E_model->update_product_by_id($id);
		$array['products'] = $this->E_model->get_all_products();
		$this->load->view('inventory', $array);
	}

	public function delete_product()
	{
		$this->load->model("E_model");
		$id = $this->input->post('product_id');

		$delete = $this->E_model->delete_product_by_id($id);
		$array['products'] = $this->E_model->get_all_products();
		$this->load->view('inventory', $array);
	}

	public function add_product()
	{
		$this->load->model("E_model");
		$array['categories'] = $this->E_model->get_all_category(); 
		$this->load->view("add_new_product", $array);
	}

	public function add_new_product()
	{
		$this->load->model("E_model");
		$add = $this->input->post();

		$product = array(
				'name' => $add['product_name'],
				'description' =>  $add['description'],
				'quantity' => $add['quantity'],
				'price' => $add['price'],
				'category' => $add['new_category'],
				'picture1' =>  $add['picture1'],
				'picture2' => $add['picture2'],
				'picture3' => $add['picture3'],
				'created_at'=> date("Y-m-d"),
				'updated_at' => date("Y-m-d")
				);

		$this->E_model->add_product($product);
		$this->inventory();
	}

	public function product_by_id()
	{
		$this->load->view("product_by_id");
	}

	public function order_by_product()
	{
		$this->load->model("E_model");
		$this->load->view('product_by_id');
	}

	public function logout()
	{
		if($this->input->post('submit') === 'logout')
			{
				$this->session->sess_destroy();
				redirect(base_url());
			}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
