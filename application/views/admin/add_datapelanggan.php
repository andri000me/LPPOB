<h3>Pelanggan</h3>
<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
if($_SESSION['user']['level'] == 'admin')	
{
	$form = new zea();
	$form->init('edit');
	$form->setTable('pelanggan');
	$form->setId(@intval($_GET[id]));
	$form->addInput('id','text');
	$form->addInput('nometer','text');
	$form->addInput('nama','text');
	$form->addInput('alamat','text');
	$form->addInput('idtarif', 'dropdown');
	$form->tableOptions('idtarif','tarif','id','kodetarif');
	$form->setLabel('idtarif','Kode Tarif');
	$form->form();
}else{
	msg('Halaman ini hanya bisa dibuka oleh Administrator','danger');
}