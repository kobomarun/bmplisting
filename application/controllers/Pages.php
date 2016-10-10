<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("mdl_pages");
	}

	public function index()
	{
    $this->load->view('pages');

	}

  public function business_directory()
  {
    $this->load->view('pages');

  }

  public function exchange_rate()
  {
    $data['bdc'] = $this->mdl_pages->getRates();
    $this->load->view('exchange-rate', $data);

  }

  public function looking_for_a_tradesman() {
    $data['trades'] = $this->mdl_pages->getTradesmen();
    $this->load->view('tradesman-view', $data);
  }
 
}