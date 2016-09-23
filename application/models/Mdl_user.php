<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_user extends CI_Model {


	function getMyItems($userid)
	{
		$query = $this->db->get_where('x_items',array('userid'=>$userid));
		return $query->result();
	}


	function check_account($email)
	{
		$this->db->select('id,email');
		$this->db->from('bmp_users');
		$this->db->where('email',$email);
		
		$query = $this->db->get();
		if($query->num_rows()==1)
			return $query->result();
		else
			return false;
	}

	function insert_rand_pass($data2)
	{
		$query = $this->db->insert('recover_pass',$data2);
		return $query;
	}

	//checks if rand pass exist
	function check_rand_pass($randpass)
	{
		$this->db->from('recover_pass');
		$this->db->where('pass',$randpass);
		$query = $this->db->get();
		if($query->num_rows()==1)
			return true;
		else
			return false;
	}

	function get_user_email($userid)
	{
		$this->db->select('email');
		$this->db->from('bmp_users');
		$this->db->where('id',$userid);
		$result = $this->db->get()->result();
		return $result;
	}

	//reset password
	function reset_password($user_id,$password)
	{
		$data = array(
               'password' => $password,
            );
		$this->db->where('id', $user_id);
		$this->db->update('bmp_users', $data);
	}

	//delete random pass
	function delete_rand_pass($rand_pass)
	{
		$this->db->delete('recover_pass', array('pass'=>$rand_pass));
	}

	//hash password
	function hash($string) {
       return hash('sha512', $string . config_item('encryption_key'));
	}

}