<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_model extends CI_Model {
	function can_login($username, $password){
		$this->db->where('username','$Username');
		$this->db->where('password','$Password');
		$query=$this->db->get('user');

		//SELECT *FROM users WHERE username = '$username' AND password='$password'

		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}