<?php 

$id = $_GET['id'];
$row = $estoques->find($id);
$row->delete();

redirect('modulos/index.php?modulo=estoque&acao=listar');