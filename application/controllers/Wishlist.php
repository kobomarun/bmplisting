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

	function add()
	{
		$product_id = $this->uri->segment(3);
		$subcatid = $this->uri->segment(4);
		$product_detail = $this->mdl_wishlist->getproductdetails($product_id);

		foreach($product_detail as $row)
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
        $data['cartitems'] = 1;
		$data['categories'] = $this->mdl_wishlist->get_categories();
		$this->load->view('home',$data);
	}

	public function remove() 
	{
	  $row_id = $this->uri->segment(3);
	  $qty = 0;
	  $array = array('rowid' =>$row_id ,'qty'=>$qty );
	  $this->cart->update($array);
	  redirect('wishlist');
	}

}
