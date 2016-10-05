<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_pages");
	}

	public function index()
	{
    $this->load->view('pages');

	}

  public function directory()
  {
    $this->load->view('pages');

  }

  public function exchange()
  {
    $this->load->view('pages');

  }
}