<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_category");
	}

	public function index($id=NULL)
	{
    if($id == '') {
      redirect('home');
    }

	}

  public function listing ($id=NULL)
  {
    if($id == '') {
      redirect('home');
    }

     $id = $this->uri->segment(3);
     $this->load->library('pagination');
     $config = array();
     //create pages
     $total_rows = $this->mdl_category->count_all_products($id);
     $config['base_url'] = base_url() . 'category/listing/'. $id;
     $config['per_page'] = 20;
     $config['total_rows'] = $total_rows;
     $config['num_links'] = 10;
     $config['use_page_numbers'] = TRUE;

      //config for bootstrap pagination class integration
      $config['full_tag_open'] = '<ul class="pagination">';
      $config['full_tag_close'] = '</ul>';
      $config['first_link'] = false;
      $config['last_link'] = false;
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';
      $config['prev_link'] = '&laquo';
      $config['prev_tag_open'] = '<li class="prev">';
      $config['prev_tag_close'] = '</li>';
      $config['next_link'] = '&raquo';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';
      $config['cur_tag_open'] = '<li class="active"><a href="#">';
      $config['cur_tag_close'] = '</a></li>';
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';

     $this->pagination->initialize($config); 
     $per_page = $config['per_page'];
     $uri_segment = $this->uri->segment(4,0);
     $data['categories'] = $this->mdl_category->get_categories($id,$per_page,$uri_segment);
     $data["links"] = $this->pagination->create_links();
     $data['per_page'] = 20;
     $data['total_rows'] = $total_rows;
     $this->load->view('category_page',$data);

  }

}
