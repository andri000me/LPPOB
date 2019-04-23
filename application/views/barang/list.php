<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css') ?>">
<a href="<?php echo site_url('barang/edit');?>" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Tambah Barang</a>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$form = new zea();
$form->init('roll');
$form->setTable('barang');
$form->search();
$form->addInput('id','plaintext');
$form->addInput('nama_barang','plaintext');
$form->addInput('spesifikasi','plaintext');
$form->addInput('lokasi','plaintext');
$form->addInput('kondisi','plaintext');
$form->addInput('stok','plaintext');
$form->addInput('sumber_dana','plaintext');
$form->setDelete(TRUE);
$form->setEdit(TRUE);
$form->form();