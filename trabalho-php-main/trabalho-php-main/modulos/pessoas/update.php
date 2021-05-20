<?php 

$id = $_GET['id'];
$row = $pessoas->find($id);
$row->fill($_POST);
$row->save();

redirect('modulos/index.php?modulo=pessoas&acao=listar');