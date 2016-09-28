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

}
