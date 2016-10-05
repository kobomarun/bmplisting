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
        'gender' => $row['gender'],
        'address' => $row['address'],
        'date' => $row['date'],
        'country' => $row['country'],
				'state' => $row['state'],
				'isLoggedin' => true
			);

			$this->session->set_userdata($usersdata);
			redirect(base_url() . "user");

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
  	redirect(base_url() .'authentication/login');
  }

  function iforgot() {
    if($this->input->post()) {
      $email = $this->input->post('email');

      $this->form_validation->set_rules('email', 'Email', 'valid_email|required|is_unique[bmp_users.email]');
      if ($this->form_validation->run() == FALSE) {

        //Email Configuration
    $this->load->library('email');
      $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'kobomarun@gmail.com',
        'smtp_pass' => 'Marunkobo',
        'mailtype'  => 'html', 
        'charset'   => 'iso-8859-1'
      );
      
      
      $this->email->initialize($config);

      //$Email = $this->input->post('email');
      
      
      $this->email->set_newline("\r\n");
      
      $this->email->set_mailtype('html');
      $this->email->from('no-reply@bmplist.com');
      $this->email->to($email);
      $this->email->subject('Password Reset Link');
      
      
      
      $message ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      </head>
      <body>';
      
    
      $message .='<div style="background:#ececec; padding:20px; border:3px solid #d3d3d3; border-radius:6px;">';
      $message .='<p style="font-size:15px;">Dear ' . $email . '</p>';
      $message .='
      <div style="width:100%; background:#fff; height:auto; border:3px solid #d02552; box-shadow:4px 4px 5px; color:#d02552; font:arial padding:20px; text-align:center; border-radius:4px;">
      <h1>Password Reset Link</h1>
      
      <br />
      </div><br />';
      $message .='<p style="font-size:15px;">Thank you for signing up on BMP Listing! <br />A password changed as been activated, if you are not the one who requested for it, please ignore this email.</p>';
      
      $message .='<div style="">
      <p style="font-size:15px;">
      Click on the link below to reset your password</a>
      </p>
      </div>';
      $message .= base_url() . "authentication/reset/" . $this->input->post('email'). "/" . rand(); 
      $message .='<p>Thank you!</p>';
      $message .='<p>The Team at BMPLIST</p>';
      $message .='</div>';
      $message .='</body></html>';

      $this->email->message($message);
      $this->email->send();


        $this->session->set_flashdata('success', 'A password reset link as been sent to your email address. Check your email ( ' . $email . ' )');
        redirect(base_url() . 'authentication/iforgot');


      } else {

        $this->session->set_flashdata('error', 'ERROR!!! We can\'t your email in our database. Enter the correct email address');
        redirect(base_url() . 'authentication/iforgot');
        

      }

    } else {
      $this->load->view('forgot_password.php');
    }
    
  }

  function reset($email=null) {

    if($this->input->post()) {
      $pwd = md5($this->input->post('password'));
      $email = $this->uri->segment(3);

      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
      $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|matches[password]');

      if ($this->form_validation->run() == FALSE) {

        $this->load->view('reset_password.php');

      } else {
         $data = array(
          'pwdd'=>$pwd
        );
        $this->db->where('email',$email);
        $this->db->update('bmp_users', $data);
        $this->session->set_flashdata('success', 'Your password was successfully reset. Please log in .');
        redirect(base_url() .'authentication/login');

      }
      
    }

    else {
      $this->load->view('reset_password');
    }

  }




}