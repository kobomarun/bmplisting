<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_home");
	}

	public function index()
	{
		$product_id = $this->uri->segment(3);
		$this->load->view('product_details');

	}

}
