<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_calculator extends CI_Model {

	function get_categories()
	{
		$this->db->select('id,name');
		$this->db->from('category');
		$result = $this->db->get()->result();
		return $result;
	}

	function get_products($category)
	{
		$this->db->select('id,name');
		$this->db->from('bmp_products');
		$this->db->where('catid',$category);
		$result = $this->db->get()->result();
		return $result;
	}

	function getproducts($category)
	{
		$this->db->select('id,name,catid,price,img');
		$this->db->from('bmp_products');
		$this->db->where('catid', $category);
		$result = $this->db->get()->result();
		return $result;
	}

	function getproductdetails($product_id)
	{
		$this->db->select('id,name,price,img');
		$this->db->from('bmp_products');
		$this->db->where('id',$product_id);
		$result = $this->db->get()->result();
		return $result;
	}


}
