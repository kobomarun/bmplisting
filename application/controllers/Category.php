<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_category");
	}

	public function index($id=NULL)
	{
    if($id == '') {
      redirect('home');
    }

	}

  public function listing ($id=NULL)
  {
    if($id == '') {
      redirect('home');
    }

    $id = $this->uri->segment(3);
    
    $data['categories'] = $this->mdl_category->get_categories($id);
    $this->load->view('category_page',$data);

  }

}
