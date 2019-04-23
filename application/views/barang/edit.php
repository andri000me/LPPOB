<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<h3>Data Barang</h3>
<?php

$form = new zea();
$form->init('edit');
$form->setTable('barang');
$form->setId(@intval($_GET['id']));
$form->addInput('nama_barang','text');
$form->addInput('spesifikasi','text');
$form->addInput('lokasi','text');
$form->addInput('kondisi','text');
$form->addInput('stok','text');
$form->addInput('sumber_dana','text');

$form->form();
