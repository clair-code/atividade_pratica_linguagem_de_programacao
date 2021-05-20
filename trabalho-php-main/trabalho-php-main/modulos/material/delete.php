<?php 

$id = $_GET['id'];
$row = $material->find($id);
$row->delete();

redirect('modulos/index.php?modulo=material&acao=listar');