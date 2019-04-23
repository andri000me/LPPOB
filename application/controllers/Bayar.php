<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bayar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('esg_model');
    $this->load->model('user_model');
    $this->load->model('pembayaran_model');
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
    $this->user_model->check_login();
    $data['data'] = $this->pembayaran_model->bayar();
    $data['data'] = $this->pembayaran_model->penggunaan();
    $this->template('bayar/index', $data);
  }
  public function data_list()
  {
    $this->user_model->check_login();
    $this->load->view('bayar/list');
  }
  public function edit()
  {
    $this->user_model->check_login();
    $this->load->view('bayar/edit');
  }
}