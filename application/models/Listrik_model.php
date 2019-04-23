<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');
class Listrik_model extends CI_Model
{
	
	public function save_penggunaan(){
		if(!empty($_POST)){
			$data = array();
			$data['id'] = $_POST['id'];
			$data['bulan'] = $_POST['bulan'];
			$data['tahun'] = $_POST['tahun'];
			$data['jumlahmeter'] = $_POST['meterakhir']-$_POST['meterawal'];
			$this->zea->set_data('tagihan',0,$data);
		}
	}
}