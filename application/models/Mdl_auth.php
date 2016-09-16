<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_auth extends CI_Model {

	

	function login($email,$pwd)
	{

		 $query =  $this->db->get_where('bmp_users',array('email'=>$email, 'pwdd'=>$pwd));
		 if($query->num_rows() == 1) {

		 	$row =  $query->row_array();
		 	return $row;
		 } else {

		 	return false;
		 }
	}

}
