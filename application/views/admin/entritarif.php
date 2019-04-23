<h3>Tarif</h3>

<a href="<?php echo site_url('tarif/edit');?>" class="btn btn-primary pull-left"> Tambah Tarif</a>

<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');
if($_SESSION['user']['level'] == 'admin')	
{
	 $form = new zea();
	 $form->init('roll');
	 $form->setTable('tarif');
	 $form->search();
	 $form->addInput('id','plaintext');
	 $form->addInput('kodetarif','plaintext');
	 $form->addInput('daya','plaintext');
	 $form->addInput('tarifperkwh','plaintext');
	 $form->setEdit(TRUE);
	 $form->setDelete(TRUE);
	 $form->form(); 
}else{
	msg('Halaman ini hanya bisa dibuka oleh Administrator','danger');
}