<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productdetails extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model("mdl_productdetails");
	}

	public function index()
	{
		$product_id = $this->uri->segment(3);
		echo $product_id;
		exit;
		$this->load->view('product_details');

	}
}
