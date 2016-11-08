<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_home");
	}

	public function index()
	{
		$data['categories'] = $this->mdl_home->get_categories();
    $data['getads'] = $this->mdl_home->getAds();
		$this->load->view('home.php',$data);
	}

}
