<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_category extends CI_Model {

	function get_categories($id,$per_page,$uri_segment)
	{
		$this->db->select('id,name,catid,price,img');
		$this->db->from('bmp_products');
		$this->db->where('catid', $id );
		$this->db->order_by("name", "asc");
	    $this->db->limit($per_page); 
      	$this->db->offset($uri_segment);
	    $query =  $this->db->get();

		if($query->num_rows()>0)
			return $query->result();
		else
			return null;
	}

	function count_all_products($id)
	{
		$this->db->where('catid',$id);
		$this->db->from('bmp_products');
		return $this->db->count_all_results();
	}

}