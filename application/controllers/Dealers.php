<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealers extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_dealers");
	}

	public function index()
	{
		$this->load->view('dealers.php');

	}

  public function recommended($id=null) {
    $id = $this->uri->segment(3);
    if($id=='') {
      $this->index();
    }
    $data['recommend'] = $this->mdl_dealers->get_recomended_dealers($id);

    $this->load->view('recommended_dealers', $data);
  }

}
