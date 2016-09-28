<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_products extends CI_Model {

	function get_products($id) {
		$this->db->order_by("name" ,"asc");
    $this->db->where('id', $id );
    $query =  $this->db->get('bmp_products')->result();
		return $query;
	}

  function get_dealers1($id) {
    $this->db->order_by('id','desc');
    $this->db->limit(1);
    $this->db->where('productid', $id );
    $query =  $this->db->get('bmp_dealers')->result();
    return $query;
  }

  function get_dealers2($id) {
    $this->db->order_by("id" ,"asc");
    $this->db->limit(1);
    $this->db->where('productid', $id );
    $query =  $this->db->get('bmp_dealers')->result();
    return $query;
  }

}