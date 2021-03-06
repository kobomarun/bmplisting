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

    $id = $this->uri->segment(3);
		$data['products'] = $this->mdl_products->get_products($id);
    $data['dealers1'] = $this->mdl_products->get_dealers1($id);
    $data['dealers2'] = $this->mdl_products->get_dealers2($id);
    $data['bought'] = $this->mdl_products->getRandomProduct();
    $data['checked'] = $this->mdl_products->getProductChecked();
    $data['states'] = $this->mdl_products->getAllStates();
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
      $productName = $this->input->post('productName');
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
        'state'=>$state,
        'product_name'=>$productName,
        'recommended_by'=>$userid
      );
        $this->db->insert('bmp_dealers',$data);
        $this->session->set_flashdata('thankyou', 'Thank you for recommending ' . $dname . '. We will get in-touch.');
        $this->load->view('thank_you.php');
    }
  }
  }

  function search()
  {
      if($this->input->post())
      {
          $search_item = $this->input->post('search_item');
          $data['search_item'] = $search_item;

          //create pages
          $total_rows = $this->mdl_products->count_all_products($search_item);
          $this->load->library('pagination');
          $config['base_url'] = base_url() . 'products/search';
          $config['per_page'] = 20;
          $config['total_rows'] = $total_rows;
          $config['num_links'] = 5;
          $config['use_page_numbers'] = TRUE;
          

          $this->pagination->initialize($config); 
          $per_page = $config['per_page'];
          $uri_segment = $this->uri->segment(2);

          $products = $this->mdl_products->getproducts($search_item,$per_page,$uri_segment);
          if($products!=null)
          {
              $data["links"] = $this->pagination->create_links();
              $data['products'] = $products;
              $this->load->view('search',$data);
          }
          else
          {
              $first_char_searchitem = $search_item[0];
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

  function list_your_products() {
    if($this->input->post()) {
      $category = $this->input->post('category');
      $address = $this->input->post('address');
      $phone = $this->input->post('phone');
      $state = $this->input->post('state');
      $country = $this->input->post('country');
      $userid = $this->input->post('userid');
      $email = $this->input->post('email');
      $productName = $this->input->post('productName');
      $price = $this->input->post('price');

      $this->form_validation->set_rules('address', 'Address', 'trim|required');
      $this->form_validation->set_rules('productName', 'Product Name', 'trim|required');
      $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
      $this->form_validation->set_rules('state', 'State', 'required');

      if ($this->form_validation->run() == FALSE) {

        $data['states'] = $this->mdl_products->getAllStates();
        $data['categories'] = $this->mdl_products->getAllCategories();
        $this->load->view('product_listing', $data);

      } else {

      $data = array(
        'email'=>$email,
        'catid'=>$category,
        'address'=>$address,
        'phone'=>$phone,
        'userid'=>$userid,
        'price'=>$price,
        'state'=>$state,
        'product_name'=>$productName
      );
        $this->db->insert('premium-products',$data);
        $this->session->set_flashdata('thankyou', 'Thank you for recommending. We will get in-touch.');
        $this->load->view('thank_you.php');
    }
      
    } else {

      $data['states'] = $this->mdl_products->getAllStates();
      $data['categories'] = $this->mdl_products->getAllCategories();
      $this->load->view('product_listing', $data);
    }
  }

}
