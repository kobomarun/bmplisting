<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

function __construct() {
		parent::__construct();
    /*if(!$this->session->userdata('isLoggedin')) {
      $this->session->set_flashdata('notLoggedIn', 'You do not have permission to access the page. Please log in');
      redirect('authentication/login');
    }
*/
		$this->load->model("mdl_user");
	}


	function  editProfile() {

		$userid = $this->session->userdata('userid');
		$data['items'] = $this->mdl_user->getMyItems($userid);

		$this->load->view('myitem', $data);
	}


   function forgot_password()
   {
   		$this->load->view('forgot_password');
   }

   function retrieve_password()
   {
   		if($this->input->post())
		{

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			
			//redirects user to login page if validation fails
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('forgot_password');
			}
			else
			{
				//gets user input
				$email = $this->input->post('email');

				//check if email exist
				$checkaccount = $this->mdl_user->check_account($email);
				if($checkaccount != false) 
				{
					foreach($checkaccount as $row)
					{
						$data['email'] = $row->email;
						$data['userid'] = $row->id;
					}
					
					$rand_number = rand(11111,99999);
					$rand_number_pass = md5($rand_number);

					$data2 = array(
							'pass' => $rand_number_pass,
						);
					//store random number in db
					$insert_pass = $this->mdl_user->insert_rand_pass($data2);

					if($insert_pass)
					{
						$userid = $data['userid'];
						$rand_pass = $rand_number_pass;
						
						 //Email Configuration
				    	$this->load->library('email');
				      	$config = Array(
					        'protocol' => 'smtp',
					        'smtp_host' => 'ssl://smtp.googlemail.com',
					        'smtp_port' => 465,
					        'smtp_user' => 'kennyemma2008@gmail.com',
					        'smtp_pass' => 'Marunkobo',
					        'mailtype'  => 'html', 
					        'charset'   => 'iso-8859-1'
				      	);
				      
				      
				      	$this->email->initialize($config);
						$this->email->set_newline("\r\n");
							
						$this->email->set_mailtype('html');
						$this->email->from('no-reply@bmplist.com','BMPListing');
						$this->email->to($email);
						$this->email->subject('BMPListing::: Reset Password');
								
						$message ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
							<html xmlns="http://www.w3.org/1999/xhtml">
							<head>
							<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
							</head>
							<body>';
						$message .='<p>Dear ' . $email . '</p>';
						
						
						$message .='<p>Please <strong><a href="' .base_url() .'user/reset/'.$userid .'/'.$rand_pass .'">
		click here</a></strong> to reset your account<p>';
						$message .='</body></html>';

						$this->email->message($message);
						$this->email->send();
						$this->session->set_flashdata('successMessage','Thanks for resetting your password. A link has been sent to your email. Please click this link to reset your password.');
						redirect('authentication');
					}

				}
				else
				{
					$data['errorMessage'] = 'The email you entered does not exist. Please enter the correct email.';
					$this->load->view('forgot_password',$data);
				}
				
			}
		}
		else
		{
			redirect('user/forgot_password');
		}
   }

   function reset()
	{
		$userid = $this->uri->segment(3,0); 
		$randpass = $this->uri->segment(4,0); 

		$data3 = array(
				'userid' => $userid,
				'randpass' => $randpass,
			);
		$this->session->set_userdata($data3);
		//check rand pass
		$check_pass = $this->mdl_user->check_rand_pass($randpass);
		if($check_pass==true)
		{
			//get user email
			$user_email = $this->mdl_user->get_user_email($userid);
			
			foreach($user_email as $row)
			{
				$data['email'] = $row->email;
				$data['userid'] = $userid;
			}
			$this->session->set_userdata($data);
			$data['randpass'] = $randpass;
			
			$this->load->view('reset_password',$data);

		}
		else
		{
			$this->session->set_flashdata('errorMessage','Wrong access! Please try again.');
			redirect('user/forgot_password');
		}
	}

	function reset_password()
	{
		//validates form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');	

		
		if($this->form_validation->run() !== false) 
		{
			$password = $this->mdl_user->hash($this->input->post('password'));
			$user_id = $this->input->post('user_id');
			$rand_pass = $this->input->post('rand_pass');
			//reset password
			$this->mdl_user->reset_password($user_id,$password);
			//delete random pass
			$this->mdl_user->delete_rand_pass($rand_pass);
			$this->session->set_flashdata('successMessage','Your password reset was successful. You can now login');
			redirect('authentication');
		}
		else
		{
			$data = array(
					'userid' => $this->session->userdata('userid'), 
					'randpass' => $this->session->userdata('randpass'),
					'email' =>  $this->session->userdata('$email'),
				);
			$data['error_msg'] = 'Your password does not match. Please try again';
			$this->load->view('reset_password',$data);

		}	
	}





}