<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		date_default_timezone_set('Asia/Manila');
	}

	public function index()
	{
		if(!$this->session->userdata('username'))
		{
			$data['message']='';
			$this->load->view('main/home',$data);
		}
		else
		{
			redirect('home/main');
		}
	}

	public function main()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('home');
		}
		else
		{
			$this->load->helper('url');
			$this->load->view('admin/components/home_main');
	    }
	}

	public function login()
	{
		if($this->session->userdata('username'))
		{
			redirect('home/main');
		}
		else if(!$this->session->userdata('username') && $this->input->post('user'))
		{
			$user=$this->input->post('user');
			$pass=md5($this->input->post('pass'));
			$result=$this->home_model->login_check($user,$pass);
				if(!empty($result))
				{
					$this->session->set_userdata('username',$user);
					$this->session->set_userdata('firstname',$result['firstname']);
					$this->session->set_userdata('id',$result['user_id']);
					if($result['type']==0)
						$this->session->set_userdata('type_handler',$result['type']);
					redirect('home/main');
				}
				else
				{
					$data['message']='Invalid username or password.';
					$this->load->view('main/home',$data);
				}
		}
		else
		{
			redirect('home');
		}
	}

	public function check_login(){
		$d=$this->home_model->check_login($this->input->get("username",true),$this->input->get("password",true));
		echo json_encode($d);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}
