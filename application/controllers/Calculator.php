<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("mdl_calculator");
		$this->shop2 = new Udp_cart("shop2");//cart2
	}

	public function index($id=NULL)
	{
    	$data['categories'] = $this->mdl_calculator->get_categories();
    	$this->load->view('calculator',$data);
	}

	public function get_products()
	{
		$category = $this->uri->segment(3);
		$data['products'] = $this->mdl_calculator->getproducts($category);
		$this->load->view('category_products',$data);
	}

	public function add()
	{
		$product_id = $this->uri->segment(3);
		$subcatid = $this->uri->segment(4);
		$product_detail = $this->mdl_calculator->getproductdetails($product_id);

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

		if($query = $this->shop2->insert($data))
		{
	        header('Content-Type: application/json');
	        //echo json_encode($query);
	        $total_amount = $this->shop2->total_cart();
	        echo json_encode($total_amount);
		} 
	}

	function viewproducts()
	{
		$data['cartcontents'] = $this->shop2->get_content();	
		$data['total_amount'] = $this->shop2->total_cart();
		$this->load->view('calculator_products',$data);
	}

	public function remove() 
	{
	  $row_id = $this->uri->segment(3);
	  $this->shop2->remove_item($row_id);
	  redirect('calculator/viewproducts');
	}

	function delete_product()
	{
		$row_id = $this->uri->segment(3);
	  	$this->shop2->remove_item($row_id);
		if($query = $this->shop2->remove_item($row_id))
		{
			header('Content-Type: application/json');
			$cartcontents = $this->shop2->get_content();	
	        echo json_encode($cartcontents);
		}
	}
}