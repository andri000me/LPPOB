<h3>Penggunaan</h3>
<br/>

<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
if($_SESSION['user']['level'] == 'petugas')	
{
	$form = new zea();
	$form->init('edit');
	$form->setTable('penggunaan');
	$form->addInput('id','dropdown');
	$form->tableOptions('id','pelanggan','id','nama');
	$form->setId(@intval($_GET['id']));
	$form->addInput('bulan','text');
	$form->addInput('tahun','text');
	$form->addInput( 'meterawal','text');
	$form->setType('meterawal','number');
	$form->addInput('meterakhir','text');
	$form->setType('meterakhir','number');
	$form->form();
}else{
	msg('Halaman ini hanya bisa dibuka oleh Petugas','danger');
}		