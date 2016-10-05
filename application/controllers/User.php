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

  function index() {
    $this->load->view('user_profile');
  }

	function  editProfile($id = null) {
    $id = $this->uri->segment(3);
    if($id=='') {
      $this->index();
    }
    if($this->input->post()) {
      $fname = $this->input->post('fname');
      $lname = $this->input->post('lname');
      $phone = $this->input->post('phone');
      $email = $this->input->post('email');
      $pwd = $this->input->post('password');
      $state = $this->input->post('state');
      $country = $this->input->post('country');
      $gender = $this->input->post('gender');
      $address = $this->input->post('address');
      $data = array(
        'fname'=>$fname,
        'lname'=>$lname,
        'fname'=>$fname,
        'pwdd'=>md5($pwd),
        'email'=>$email,
        'phone'=>$phone,
        'address'=>$address,
        'state'=>$state,
        'country'=>$country,
        'gender'=>$gender
      );

      $this->db->where('id', $id);
      $this->db->update('bmp_users', $data);

      $this->session->set_flashdata('success', 'You have successfully updated your profile');
        redirect(base_url() . 'user');

    } else {

		$id = $this->session->userdata('id');
		$data['profile'] = $this->mdl_user->getProfile($id);

		$this->load->view('edit_profile', $data);

    }
	}


}