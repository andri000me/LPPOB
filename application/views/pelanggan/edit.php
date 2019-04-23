<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php defined('BASEPATH') OR exit('No direct script acces allowed');

$form = new zea();
$form->init('edit');
$form->setTable('pelanggan');
$form->setId(@intval($_GET['id']));
$form->addInput('nama','text');
$form->addInput('alamat','text');
$form->addInput('hp','text');
$form->setLabel('hp','No. HP');
$form->addInput('kelamin','text');
$form->setLabel('kelamin','Jenis Kelamin');


$form->form();