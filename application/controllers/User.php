<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

function __construct() {
		parent::__construct();
    if(!$this->session->userdata('isLoggedin')) {
      $this->session->set_flashdata('notLoggedIn', 'You do not have permission to access the page. Please log in');
      redirect('authentication/login');
    }

		$this->load->model("mdl_user");
	}


	function  myItems() {

		$userid = $this->session->userdata('userid');
		$data['items'] = $this->mdl_user->getMyItems($userid);

		$this->load->view('myitem', $data);
	}


}