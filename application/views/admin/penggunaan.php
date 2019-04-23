<h3>Penggunaan</h3>
<br/>
<a href="<?php echo site_url('penggunaan/edit');?>" class="btn btn-primary pull-left"> Tambah Penggunaan</a>
<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
if($_SESSION['user']['level'] == 'petugas')	
{
	//$bulan = ['1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'];
	$form = new zea();
	$form->init('roll');
	$form->setTable('penggunaan');
	$form->search();
	$form->addInput('id','plaintext');
	$form->setLabel('id','nama');
	$form->addInput('id','dropdown');
	$form->tableOptions('id','pelanggan','id','nama');
	$form->setAttribute('id',['disabled'=>'disabled']);
	$form->addInput('bulan','plaintext');
	$form->addInput('tahun','plaintext');
	$form->addInput('meterawal','plaintext');
	$form->addInput('meterakhir','plaintext');
	$form->setEdit(TRUE);
	$form->setDelete(TRUE);
	$form->setNumbering(true);
	$form->form();
}else{
	msg('Halaman ini hanya bisa dibuka oleh Petugas','danger');
}		