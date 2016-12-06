<?php
class Home_model extends CI_Model
{

	public function login_check($user,$pass)
	{
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$res=$this->db->get('users');
		return $res->row_array();
	}

	public function check_login($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',md5($pass));
		$res=$this->db->get('users');
		if($res->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

}
?>