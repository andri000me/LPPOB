<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanpdf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('user_model');
	}

	private function template($content,$data=null){
		$data['content'] = $this->load->view($content,$data,true);
		$this->load->view('template',$data);
	}

	public function index()
	{
		$this->user_model->check_login();
		$this->template('laporan');
	}

	public function datapelanggan()
	{
		$pdf = new FPDF('l','mm','A4');
		//membuat halaman baru
		$pdf->AddPage();
		//setting jenis font yang akan digunakan
		$pdf->SetFont('Arial','B','16');
		//mencetak string
		$pdf->Cell(250,7,'Listrik Payment Point Online Bank',0,1,'C');
		$pdf->Cell(250,7,'SMK NEGERI 1 BANGSRI',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(250,7,'LAPORAN DATA PELANGGAN',0,1,'C');
		//memberi space kebawah agar tidak terlalu rapat
		$pdf->Cell(8,7,'',0,1);
		$pdf->SetFont('Arial','B','10');
		$pdf->Cell(10,6,'ID',1,0);
		$pdf->Cell(35,6,'NOMETER',1,0);
		$pdf->Cell(90,6,'NAMA',1,0);
		$pdf->Cell(35,6,'ALAMAT',1,0);
		$pdf->Cell(25,6,'IDTARIF',1,1);
		$data = $this->db->get('pelanggan')->result();

		foreach ($data as $row)
		 {
			$pdf->Cell(10,6,$row->id,1,0);
			$pdf->Cell(35,6,$row->nometer,1,0);
			$pdf->Cell(90,6,$row->nama,1,0);
			$pdf->Cell(35,6,$row->alamat,1,0);
			$pdf->Cell(25,6,$row->idtarif,1,1);
		}
		$pdf->Output();
	}

	public function tagihan()
	{
		$pdf = new FPDF('l','mm','A4');
		//membuat halaman baru
		$pdf->AddPage();
		//setting jenis font yang akan digunakan
		$pdf->SetFont('Arial','B','16');
		//mencetak string
		$pdf->Cell(250,7,'Listrik Payment Point Online Bank',0,1,'C');
		$pdf->Cell(250,7,'SMK NEGERI 1 BANGSRI',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(250,7,'LAPORAN TAGIHAN',0,1,'C');
		//memberi space kebawah agar tidak terlalu rapat
		$pdf->Cell(8,7,'',0,1);
		$pdf->SetFont('Arial','B','10');
		$pdf->Cell(10,6,'ID',1,0);
		$pdf->Cell(35,6,'BULAN',1,0);
		$pdf->Cell(90,6,'JUMLAHMETER',1,0);
		$pdf->Cell(35,6,'STATUS',1,1);
		$data = $this->db->get('tagihan')->result();

		foreach ($data as $row)
		 {
			$pdf->Cell(10,6,$row->id,1,0);
			$pdf->Cell(35,6,$row->bulan,1,0);
			$pdf->Cell(90,6,$row->jumlahmeter,1,0);
			$pdf->Cell(35,6,$row->status,1,1);
		}
		$pdf->Output();
	}

	public function pembayaran()
	{
		$pdf = new FPDF('l','mm','A4');
		//membuat halaman baru
		$pdf->AddPage();
		//setting jenis font yang akan digunakan
		$pdf->SetFont('Arial','B','16');
		//mencetak string
		$pdf->Cell(250,7,'Listrik Payment Point Online Bank',0,1,'C');
		$pdf->Cell(250,7,'SMK NEGERI 1 BANGSRI',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(250,7,'LAPORAN PEMBAYARAN',0,1,'C');
		//memberi space kebawah agar tidak terlalu rapat
		$pdf->Cell(8,7,'',0,1);
		$pdf->SetFont('Arial','B','10');
		$pdf->Cell(10,6,'ID',1,0);
		$pdf->Cell(35,6,'TANGGAL',1,0);
		$pdf->Cell(90,6,'BIAYAADMIN',1,1);
		$data = $this->db->get('pembayaran')->result();

		foreach ($data as $row)
		 {
			$pdf->Cell(10,6,$row->id,1,0);
			$pdf->Cell(35,6,$row->tanggal,1,0);
			$pdf->Cell(90,6,$row->biayaadmin,1,1);
		}
		$pdf->Output();
	}
}	

