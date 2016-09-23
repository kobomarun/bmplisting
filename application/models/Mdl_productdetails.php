<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_productdetails extends CI_Model {

	function getproductdetails($product_id)
	{
		$this->db->select('name,price,img,description,overview,sku,market,add_info');
		$this->db->from('bmp_products');
		$this->db->where('id',$product_id);
		$result = $this->db->get()->result();
		return $result;
	}


}