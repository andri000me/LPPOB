<h3>Pelanggan</h3>

<a href="<?php echo site_url('pelanggan/edit');?>" class="btn btn-primary pull-left"> Tambah Pelanggan</a>
<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
if($_SESSION['user']['level'] == 'admin')	
{
	$form = new zea();
	$form->init('roll');
	$form->setTable('pelanggan');
	$form->search();
	$form->addInput('id','plaintext');
	$form->addInput('nometer','plaintext');
	$form->addInput('nama','plaintext');
	$form->addInput('alamat','plaintext');
	$form->addInput('idtarif','plaintext');
	$form->setEdit(TRUE);
	$form->setDelete(TRUE);

	$form->form();
}else{
	msg('Halaman ini hanya bisa dibuka oleh Administrator','danger');
}						