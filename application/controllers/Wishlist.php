<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("mdl_wishlist");
		$this->shop1 = new Udp_cart("shop1");//cart1
	}

	function index()
	{
		$data['cart_contents'] = $this->shop1->get_content();
		$this->load->view('wishlist',$data);
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

		if($query = $this->shop1->insert($data))
		{
			//header('Content-Type: application/json');
	        //echo json_encode($query);
	        $totalitems = $this->shop1->total_articles();
	        echo json_encode($totalitems);
		} 
        /*$data['cartitems'] = 1;
		$data['categories'] = $this->mdl_wishlist->get_categories();
		$this->load->view('home',$data);*/
	}

	public function remove() 
	{
	  $row_id = $this->uri->segment(3);
	  /*echo $row_id;
	  exit;
	  $qty = 0;
	  $array = array('rowid' =>$row_id ,'qty'=>$qty );*/
	  $this->shop1->remove_item($row_id);
	  //$this->shop1->update($array);
	  redirect('wishlist');
	}

	function delete_product()
	{
		$row_id = $this->uri->segment(3);
		$qty = 0;
		$array = array('rowid' =>$row_id ,'qty'=>$qty );
		if($query = $this->shop1->delete($array))
		{
			header('Content-Type: application/json');
	        echo json_encode($query);
		}
	}

	function total_items()
	{
		 $totalitems = $this->shop1->total_articles();
		 header('Content-Type: application/json');
	     echo json_encode($totalitems);
	}

}
