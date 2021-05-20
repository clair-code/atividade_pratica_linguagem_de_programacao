<?php 

$id = $_GET['id'];
$row = $material->find($id);
$row->fill($_POST);
$row->save();

redirect('modulos/index.php?modulo=material&acao=listar');