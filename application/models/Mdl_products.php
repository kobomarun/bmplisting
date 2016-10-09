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


  function count_all_products($search_item)
  {
    $this->db->like('name', $search_item);
    $this->db->from('bmp_products');
    return $this->db->count_all_results();
  }
  function getproducts($search_item,$per_page,$uri_segment)
  {
      $this->db->select('p.id as product_id, p.name as product_name,p.price,p.img,s.name as category_name,p.catid');
      $this->db->from('bmp_products p');
      $this->db->join('sub_category s','p.subcatid = s.id');
      $this->db->like('p.name', $search_item);
      $this->db->limit($per_page); 
      $this->db->offset($uri_segment); 
      $query = $this->db->get();
      $result = $query->result();

      if($query->num_rows()>0)
        return $result;
      else
        return false;
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

  function getRandomProduct() {
    $this->db->order_by('name', 'RANDOM');
    $this->db->limit(4);
    $result = $this->db->get('bmp_products')->result();
    return $result; 

  }

  function getProductChecked() {
    $this->db->order_by('name', 'RANDOM');
    $this->db->order_by('name', 'DESC');
    $this->db->limit(4);
    $result = $this->db->get('bmp_products')->result();
    return $result; 

  }

  function getAllStates() {
    $query = $this->db->get('states');
    return $query->result();
  }

  function getAllCategories()
  {
    $this->db->select('id,name');
    $this->db->from('category');
    $this->db->order_by('name','ASC');
    $result = $this->db->get()->result();
    return $result;
  }

}