<?php


/**
 * Created By Alfonso Fernandez-Ocampo
 */

include 'FormInstanceInterface.php';
include 'FormBase.php';
include 'FormBuilder.php';
include 'Form.php';
include 'FormEdit.php';

$form = new Form();
$form = $form->getForm();

print($form);


//$form = new FormEdit();
//$form->hydrate(array(
//    'email' => 'myEmail@hotmail.com',
//    'username' => 'apocalypse',
//    'password' => 'VDG$DSFWEf'
//));
//
//
//$form = $form->getForm();
//
//print($form);