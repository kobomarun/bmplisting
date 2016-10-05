<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_blog extends CI_Model {


	function getAllPosts()
	{
    $this->db->order_by('title', 'DESC');
		$query = $this->db->get('blog');
		return $query->result();
	}

}