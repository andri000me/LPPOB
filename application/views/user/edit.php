<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php

$form = new zea();
$form->init('edit');
$form->setTable('user');
$form->setId(@intval($_GET['id']));
$form->addInput('nama','text');
$form->addInput('username','text');
$form->addInput('pass','text');
$form->addInput('level','text');
$form->form();