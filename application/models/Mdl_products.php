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

  function get_categories()
  {
    $this->db->distinct();
    $this->db->select('c.id,c.name');
    $this->db->from('category c');
    $this->db->join('bmp_products p','p.catid = c.id');
    $result = $this->db->get()->result();
    return $result;
  }


  function getproducts($search_item)
  {
      $this->db->select('p.id as product_id, p.name as product_name,p.price,p.img,s.name as category_name,p.catid');
      $this->db->from('bmp_products p');
      $this->db->join('sub_category s','p.subcatid = s.id');
      $this->db->like('p.name', $search_item);
      $result = $this->db->get()->result();
      return $result; 
  }

  function getproductslimit($first_char_searchitem)
  {
      $this->db->select('p.id as product_id, p.name as product_name,p.price,p.img,s.name as category_name,p.catid');
      $this->db->from('bmp_products p');
      $this->db->join('sub_category s','p.subcatid = s.id');
      $this->db->like('p.name', $first_char_searchitem);
      $this->db->limit(8);
      $result = $this->db->get()->result();
      return $result; 
  }

}