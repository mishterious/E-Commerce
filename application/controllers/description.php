<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Description extends CI_Controller {

  public function index()
  {
    $this->load->view('description');
  }

  public function buy()
  {
    var_dump($this->session->post);
    die();
  }


}
