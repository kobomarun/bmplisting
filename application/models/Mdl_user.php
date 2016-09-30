<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_user extends CI_Model {


	function getProfile($id)
	{

		$query = $this->db->get_where('bmp_users',array('id'=>$id));
		return $query->result();
	}

}