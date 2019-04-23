<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<h3>Pembayaran</h3>
<?php

$form = new zea();
$form->init('edit');
$form->setTable('pembayaran');
$form->setId(@intval($_GET['id']));
$form->addInput('idpelanggan','text');
$form->addInput('tanggal','text');
$form->addInput('bulanbayar','text');
$form->setLabel('bulanbayar', 'Bulan Bayar');
$form->addInput('biayaadmin','text');
$form->setLabel('biayaadmin', 'Biaya Admin');

$form->form();
