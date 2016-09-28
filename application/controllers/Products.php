<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_products");
	}

	public function details($id=NULL)
	{
    if($id === '') {
      redirect('home');
    }
		$data['products'] = $this->mdl_products->get_products($id);
    $data['dealers'] = $this->mdl_products->get_dealers($id);
		$this->load->view('product_details.php', $data);

	}

  public function dealers() {
    if($this->input->post()) {

      $dname = $this->input->post('dname');
      $address = $this->input->post('address');
      $phone = $this->input->post('phone');
      $state = $this->input->post('state');
      $country = $this->input->post('country');
      $userid = $this->input->post('id');
      $productid = $this->input->post('productid');
      $price = $this->input->post('price');

      $this->form_validation->set_rules('dname', 'Dealers Name', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('address', 'Address', 'trim|required');
      $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
      $this->form_validation->set_rules('state', 'State', 'required');

      if ($this->form_validation->run() == FALSE) {

        $this->load->view('product_details.php');

      } else {

      $data = array(
        'name'=>$dname,
        'address'=>$address,
        'phone'=>$phone,
        'userid'=>$userid,
        'productid'=>$productid,
        'price'=>$price,
        'recommended_by'=>$userid
      );
        $this->db->insert('bmp_dealers',$data);
        $this->session->set_flashdata('thankyou', 'Thank you for recommending ' . $dname . '. We will get in-touch with the dealer.');
        $this->load->view('thank_you.php');
    }
  }
  }

  function search()
  {
      if($this->input->post())
      {
          $search_item = $this->input->post('search_item');
          $products = $this->mdl_products->getproducts($search_item);
          if($products!=null)
          {
              $data['products'] = $products;
              $this->session->set_flashdata('search_item', $search_item);
              $this->load->view('search',$data);
          }
          else
          {
              $first_char_searchitem = $search_item[0];
              $data['search_item'] = $search_item;
              $data['msg'] = 'No result found for your search';
              $data['suggested'] = true;
              $data['products'] = $this->mdl_products->getproductslimit($first_char_searchitem);
              $this->load->view('search',$data);
          }
      }
      else
      {
              $data['categories'] = $this->mdl_products->get_categories();
              $this->load->view('home',$data); 
      }
  }

  function product_search()
  {
          $search_item = $this->input->post('search_item');
          $products = $this->mdl_products->getproducts($search_item);
          return json_encode($products);
  }

}
