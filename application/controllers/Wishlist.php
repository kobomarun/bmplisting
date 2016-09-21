<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("mdl_wishlist");
	}

	function index()
	{
		$this->load->view('wishlist');
	}

	public function add()
	{
		$product_id = $this->uri->segment(3);
		$subcatid = $this->uri->segment(4);
		//$product_details = $this->mdl_wishlist->get_product_details($product_id);
		//$product_detail = $this->mdl_wishlist->getproductdetails($product_id);

		$this->db->select('p.id,p.name,p.price,p.img,s.name');
		$this->db->from('bmp_products p');
		$this->db->join('sub_category s','p.subcatid = s.id');
		$this->db->where('p.id',$product_id);
		$result = $this->db->get()->result();
		
		foreach($result as $row)
		{
			$product_id = $row->id;
			$product_name = $row->name;
			$price = $row->price;
			$product_image = $row->img;
			$category = $row->name;
		}
		$quantity = 1;

		$data = array(
                    'id' => $product_id,
                    'price' => $price,
                    'qty' => $quantity,
                    'name' => $product_name,
                    'options' => array('image ' => $product_image, 'category ' => $category),
            );
        $this->cart->insert($data); 
		/*$product_id = $this->input->post('product_id');
		$price = $this->input->post('price');
		$quantity = 1;
		$product_name = $this->input->post('product_name');
		$image = $this->input->post('image');
		$category_name = $this->input->post('category_name');

		$data = array(
                    'id' => $product_id,
                    'price' => $price,
                    'qty' => $quantity,
                    'name' => $product_name,
                    'options' => array('image ' => $image, 'category' => $category_name),
            );
        $this->cart->insert($data); 
        */
        $data['cartitems'] = 1;
		$data['categories'] = $this->mdl_wishlist->get_categories();
		$this->load->view('home',$data);
	}

}
