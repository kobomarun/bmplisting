<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_category");
	}

	public function index($id=NULL)
	{
    $this->load->view('calculator');

	}
}
