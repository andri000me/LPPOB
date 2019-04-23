<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php defined('BASEPATH') OR exit('No direct script acces allowed');

$form = new zea();
$form->init('roll');
$form->setTable('penjualan');
$form->addInput('id','plaintext');
$form->addInput('barang_id','plaintext');
$form->addInput('qty','plaintext');
$form->addInput('tgl','plaintext');
$form->setEdit(TRUE);
$form->setDelete(TRUE);

$form->form();