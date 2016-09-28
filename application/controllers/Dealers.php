<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealers extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_dealers");
	}

	public function index()
	{
		//$data['categories'] = $this->mdl_home->get_categories();
		$this->load->view('dealers.php');

	}

}
