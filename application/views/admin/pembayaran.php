
<h3>Pembayaran</h3>

<a href="<?php echo site_url('#');?>" class="btn btn-primary pull-left"> Tambah Pembayaran</a>

<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
if($_SESSION['user']['level'] == 'admin' || $_SESSION['user']['level'] == 'petugas' )	
{

	$form = new zea();
	$form->init('edit');
	$form->setTable('pembayaran');
	$form->setId(@intval($_GET['id']));
	$form->addInput('idpelanggan','text');
	$form->addInput('tanggal','text');
	$form->addInput('bulanbayar','text');
	$form->addInput('biayaadmin','text');

	$form->form();
}else{
	msg('Anda tidak mempunyai HAK untuk membuka laman ini','danger');
}		