<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_blog");
    $this->load->helper('text');
	}

	public function index()
	{
    $data['blog'] = $this->mdl_blog->getAllPosts();
    $this->load->view('blog', $data);

	}
}