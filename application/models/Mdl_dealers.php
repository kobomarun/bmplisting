<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_dealers extends CI_Model {

	function get_categories($id)
	{
		$this->db->order_by("name", "asc");
    $this->db->where('catid', $id );
    $query =  $this->db->get('bmp_products')->result();
		return $query;
	}

  function get_recomended_dealers($id)
  {
    $this->db->where('userid', $id );
    $query =  $this->db->get('bmp_dealers')->result();
    return $query;
  }

}