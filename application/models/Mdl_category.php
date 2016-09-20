<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_category extends CI_Model {

	function get_categories($id)
	{
		$this->db->order_by("name", "asc");
    $this->db->where('catid', $id );
    $query =  $this->db->get('bmp_products')->result();
		return $query;
	}

}