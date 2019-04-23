<?php defined('BASEPATH') OR exit('No direct script acces allowed');



$form = new zea();
$form->init('roll');
$form->setTable('user');
$form->search();
$form->addInput('id','plaintext');
$form->addInput('username','plaintext');
$form->addInput('pass','plaintext');
$form->setDelete(TRUE);
$form->setEdit(TRUE);
$form->form();