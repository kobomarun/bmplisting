<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_diy extends CI_Model {


	function getAllPosts()
	{
    $this->db->order_by('title', 'ASC');
		$query = $this->db->get('blog');
		return $query->result();
	}

}