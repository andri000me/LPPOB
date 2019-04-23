<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
	public function pembayaran()
	{
		if(!empty($_POST))
		{
			$data = $this->db->query('SELECT * FROM pembayaran WHERE id_pelanggan = ?', @$_POST['username'])->row_array();
		}
	}

	public function penggunaan()
	{
		if(!empty($_GET['id']))
		{
			$id = @intval($_GET['id']);
			if(!empty($id) && is_numeric($id))
			{
				$data = array();
				$data['penggunaan'] = $this->db->query('SELECT pelanggan.id,tagihan.bulan,tagihan.id AS tagihan_id,tarif.tarifperkwh,tagihan.tahun,tagihan.jumlahmeter,pelanggan.nama FROM pelanggan,tagihan,tarif WHERE tagihan.id = ? AND pelanggan.id=tagihan.id AND tarif.id=pelanggan.idtarif AND status = "0"', $id)->result_array();
				return $data;
			}
		}
	}

	public function bayar()
	{
		if(!empty($_POST))
		{
			$data = $_POST;
			$this->zea->set_data('tagihan',$data['tagihan_id'], ['status'=>'1']);
			unset($data['tagihan_id']);
			$this->zea->set_data('pembayaran',0, $data);
		}
	}
}