<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function index()
	{
		$this->load->model('E_model');
		$array['products'] = $this->E_model->get_all_products();
		$this->load->view('products', $array);
	}
	public function description()
	{
		$this->load->view('description');
	}
	public function cart()
	{
		// var_dump("hello");

		$tmp = $this->input->post();
		var_dump($tmp);
		die();
		$this->load->view('user_cart');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
