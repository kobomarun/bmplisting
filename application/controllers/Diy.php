<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diy extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_diy");
    $this->load->helper('text');
	}

  function index() {
    $this->do_it_yourself();
  }

	public function do_it_yourself()
	{
    $data['diy'] = $this->mdl_diy->getAllPosts();
    $this->load->view('diy', $data);

	}
}