<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_requisition extends CI_Model {

	function get_categories()
	{
		$this->db->distinct();
		$this->db->select('c.id,c.name');
		$this->db->from('category c');
		$this->db->join('bmp_products p','p.catid = c.id');
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

	function getMyRequisitions($id)
  {
    $this->db->where('userid', $id );
    $query =  $this->db->get('requisition')->result();
    return $query;
  }


}