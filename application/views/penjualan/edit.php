<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
<?php defined('BASEPATH') OR exit('No direct script acces allowed');

$form = new zea();
$form->init('edit');
$form->setTable('penjualan');
$form->setId(@intval($_GET['id']));
$form->addInput('id','text');
$form->addInput('barang_id','dropdown');
$form->setLabel('barang_id','Barang');
$form->tableOptions('barang_id','barang','id','nama');
$form->addInput('qty','text');
$form->addInput('tgl','text');

$form->form();