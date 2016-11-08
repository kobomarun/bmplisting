<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_home extends CI_Model {

	function get_categories()
	{
		$this->db->distinct();
		$this->db->select('c.id,c.name');
		$this->db->from('category c');
		$this->db->join('bmp_products p','p.catid = c.id');
		$result = $this->db->get()->result();
		return $result;
	}

  function getAds() {
    $this->db->order_by('title', 'RANDOM');
    $this->db->limit(2);
    $result = $this->db->get('bmp_ads')->result();
    return $result; 
  }

}