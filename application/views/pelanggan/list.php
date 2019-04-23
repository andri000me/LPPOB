<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php defined('BASEPATH') OR exit('No direct script acces allowed');

$form = new zea();
$form->init('roll');
$form->search();
$form->setTable('pelanggan');
$form->addInput('id','plaintext');
$form->addInput('nama','plaintext');
$form->addInput('alamat','plaintext');
$form->addInput('hp','plaintext');
$form->addInput('kelamin','plaintext');
$form->setEdit(TRUE);
$form->setDelete(TRUE);

$form->form();