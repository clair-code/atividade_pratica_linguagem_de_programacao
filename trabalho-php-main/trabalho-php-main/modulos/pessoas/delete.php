<?php 

$id = $_GET['id'];
$row = $pessoas->find($id);
$row->delete();

redirect('modulos/index.php?modulo=pessoas&acao=listar');