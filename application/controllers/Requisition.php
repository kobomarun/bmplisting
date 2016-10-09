<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requisition extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("mdl_requisition");
	}

	function index()
	{
		$this->load->view('requisition');
	}

	function add()
	{
		$product_id = $this->uri->segment(3);
		$subcatid = $this->uri->segment(4);
		$product_detail = $this->mdl_requisition->getproductdetails($product_id);

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

		if($query = $this->cart->insert($data))
		{
			header('Content-Type: application/json');
	        echo json_encode($query);
		} 
        /*$data['cartitems'] = 1;
		$data['categories'] = $this->mdl_requisition->get_categories();
		$this->load->view('home',$data);*/
	}

	public function remove() 
	{
	  $row_id = $this->uri->segment(3);
	  $qty = 0;
	  $array = array('rowid' =>$row_id ,'qty'=>$qty );
	  $this->cart->update($array);
	  redirect('requisition');
	}

	function delete_product()
	{
		$row_id = $this->uri->segment(3);
		$qty = 0;
		$array = array('rowid' =>$row_id ,'qty'=>$qty );
		if($query = $this->cart->delete($array))
		{
			header('Content-Type: application/json');
	        echo json_encode($query);
		}
	}

}
