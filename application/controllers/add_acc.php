<?php

class Add_acc extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('/admin/add_acc');
	}
}
