<?php 

$id = $_GET['id'];
$row = $estoques->find($id);
$row->fill($_POST);
$row->save();

redirect('modulos/index.php?modulo=estoque&acao=listar');