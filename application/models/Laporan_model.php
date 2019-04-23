<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model{
	
	public function Laporan()
	{
		if(!empty($_GET['id']))
		{
			$id = @intval($_GET['id']);
			if(!empty($id) && is_numeric($id))
			{
				$data = array();
				$data['penggunaan'] = $this->db->query('SELECT pelanggan.id,tagihan.bulan,tagihan.id AS tagihan_id,tarif.tarifperkwh,tagihan.tahun,tagihan.jumlahmeter,pelanggan.nama FROM pelanggan,tagihan,tarif WHERE tagihan.id = ? AND pelanggan.id=tagihan.id AND tarif.id=pelanggan.idtarif AND status = "Belum Lunas"', $id)->result_array();
				return $data;
			}
		}
	}
}