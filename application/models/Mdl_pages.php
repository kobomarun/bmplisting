<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_pages extends CI_Model {


	function getMyItems($userid)
	{

		$query = $this->db->get_where('x_items',array('userid'=>$userid));
		return $query->result();
	}

  function getRates() {
    $query = $this->db->get('bdc')->result();
    return $query;
  }

  function getTradesmen() {
    $query = $this->db->get('tradesman')->result();
    return $query;
  }

}