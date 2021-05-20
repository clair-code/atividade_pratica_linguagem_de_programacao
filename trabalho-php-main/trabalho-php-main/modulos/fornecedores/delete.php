<?php 

$id = $_GET['id'];
$row = $fornecedores->find($id);
$row->delete();

redirect('modulos/index.php?modulo=fornecedores&acao=listar');