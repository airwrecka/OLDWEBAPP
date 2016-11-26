<?php

class Suppliers extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('/admin/suppliers_page');
	}
}
