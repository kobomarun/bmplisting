<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {


	function __construct() {
		parent::__construct();

		$this->load->model("mdl_auth");
		$this->session->unset_userdata('isLoggedin');
	}

	function index() {
		$this->load->view('login');
	}


  function login() {
		if($this->input->post()) { 
		$email = $this->input->post('email');
		$pwd = md5($this->input->post('password'));


		$row = $this->mdl_auth->login($email,$pwd);
		if($row == true) {
			$usersdata = array(
				'id' => $row['id'],
				'fname' => $row['fname'],
        'lname' => $row['lname'],
				'email' => $row['email'],
				'phone' => $row['phone'],
				'state' => $row['state'],
				'isLoggedin' => true
			);

			$this->session->set_userdata($usersdata);
			redirect("home");

		} else {

			$datas['error'] = "Invalid Email / Password";
			$this->load->view('login', $datas);
		}
  		$data = array (
  			'password'=>$pwd,
  			'email'=>$email,

  		);
  	}
  		$this->load->view('login');
  }

  function logout() {
  	$this->session->set_flashdata('logout','You have successfully logout');
  	redirect('authentication/login');
  }


}