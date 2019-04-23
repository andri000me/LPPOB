<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('esg_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}

	private function template($content,$data=null){ 
		$data['content'] = $this->load->view($content,$data,true);
		$this->load->view('template',$data);
	}

	public function index()
	{
		$this->template('index');
	}

	public function edit()
	{
		$this->template('barang/edit');
	}

	public function daftar()
	{
		$this->template('barang/list');
	}

}
