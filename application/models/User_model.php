<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function check_login()
	{
		if(empty($_SESSION['user']))
		{
			redirect('login');
		}
	}

	public function login()
	{
		if(!empty($_POST))
		{
			$data = $this->db->query('SELECT * FROM user WHERE username = ?',@$_POST['username'])->row_array();
			if(empty($data)){
				msg('Username tidak diketahui','danger');
			}
			else {
				if($data['pass']==@$_POST['pass']){
					$_SESSION['user']=$data;
					redirect('admin');
				}
				else {
					msg('Password salah ya, masukkan password yang benar','danger');
				}
			}
		} else {	

		}
	}
}