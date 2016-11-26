<?php

class Sales extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('/admin/sales_page');
	}
}
