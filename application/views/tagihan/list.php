<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<h3>Tagihan</h3>

<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');
if($_SESSION['user']['level'] == 'admin')	
{
	 $form = new zea();
	 $form->init('roll');
	 $form->setTable('tagihan');
	 $form->addInput('id','plaintext');
	 $form->addInput('bulan','plaintext');	 
	 $form->addInput('Jumlahmeter','plaintext');
	 $form->addInput('status','plaintext');
	 $form->setDelete(TRUE);
	 $form->form(); 
}else{
	msg('STOP','danger');
}