<?php 

$id = $_GET['id'];
$row = $fornecedores->find($id);
$row->fill($_POST);
$row->save();

redirect('modulos/index.php?modulo=fornecedores&acao=listar');