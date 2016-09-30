<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
    if($this->input->post()) {

      $fname = $this->input->post('fname');
      $lname = $this->input->post('lname');
      $phone = $this->input->post('phone');
      $email = $this->input->post('email');
      $pwd = $this->input->post('password');

      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
      $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|matches[password]');
      $this->form_validation->set_rules('fname', 'Full Name', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'valid_email|required|is_unique[bmp_users.email]');

      if ($this->form_validation->run() == FALSE) {

        $this->load->view('register.php');

      } else {

      $data = array(
        'fname'=>$fname,
        'lname'=>$lname,
        'fname'=>$fname,
        'pwdd'=>md5($pwd),
        'email'=>$email,
        'phone'=>$phone,
        'ipaddress'=>$this->input->ip_address(),
        'date'=> date("F j, Y")
      );
        $this->db->insert('bmp_users',$data);

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
      $this->email->subject('Account Activation Your registration was successful');
      
      
      
      $message ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      </head>
      <body>';
      
    
      $message .='<div style="background:#ececec; padding:20px; border:3px solid #d3d3d3; border-radius:6px;">';
      $message .='<p style="font-size:15px;">Dear ' . $this->input->post('fname') ." " . $this->input->post('lname') . '</p>';
      $message .='
      <div style="width:100%; background:#fff; height:auto; border:3px solid #d02552; box-shadow:4px 4px 5px; color:#d02552; font:arial padding:20px; text-align:center; border-radius:4px;">
      <h1>Account Activation</h1>
      
      <br />
      </div><br />';
      $message .='<p style="font-size:15px;">Thank you for signing up on BMP Listing! <br />You need to activate your account</p>';
      
      $message .='<div style="">
      <p style="font-size:15px;">
      Click on the link below to activate your account</a>
      </p>
      </div>';
      $message .= base_url() . "/registration/activation/" . $this->input->post('email'). "/" . rand(); 
      $message .='<p>Thank you!</p>';
      $message .='<p>The Team at BMPLIST</p>';
      $message .='</div>';
      $message .='</body></html>';

      $this->email->message($message);
      $this->email->send();

        $this->session->set_flashdata('success', 'An email has been sent to your email address. You need to activate your account');
        redirect(base_url() . 'authentication/login');
        }

      } 
      else {
      $this->load->view('register.php');
    }
  }

  function activation($email) {
    $email = $this->uri->segment(3);
    $data = array('status'=>1);
    $this->db->where('email',$email);
    $this->db->update('bmp_users', $data);
    $this->session->set_flashdata('success', 'Your registration was successful. Please log in .');
    redirect('authentication/login');
  }
		
}
