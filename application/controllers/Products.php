<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_products");
	}

	public function details($id=NULL)
	{
    if($id === '') {
      redirect('home');
    }
		$data['products'] = $this->mdl_products->get_products($id);
    $data['dealers'] = $this->mdl_products->get_dealers($id);
		$this->load->view('product_details.php', $data);

	}

}
