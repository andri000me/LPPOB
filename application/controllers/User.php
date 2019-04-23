<?php defined('BASEPATH') OR exit('No direct script acces allowed');

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('esg_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}

	public function index(){
		$this->load->view('user/index');
	}

	public function data_list(){
		$this->load->view('user/list');
	}
	
	public function edit(){
		$this->load->view('user/edit');
	}
}