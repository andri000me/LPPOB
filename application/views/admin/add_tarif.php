<h3>Tarif</h3>

<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');
if($_SESSION['user']['level'] == 'admin')	
{
	 $form = new zea();
	 $form->init('edit');
	 $form->setTable('tarif');
	 $form->setId(@intval($_GET['id']));
	 $form->addInput('kodetarif','text');
	 $form->setLabel('kodetarif','Kode Tarif');	 
	 $form->addInput('daya','text');
	 $form->setType('daya','number');
	 $form->addInput('tarifperkwh','text');
	 $form->setEdit(TRUE);
	 $form->setDelete(TRUE);
	 $form->form(); 
}else{
	msg('Halaman ini hanya bisa dibuka oleh Administrator','danger');
}