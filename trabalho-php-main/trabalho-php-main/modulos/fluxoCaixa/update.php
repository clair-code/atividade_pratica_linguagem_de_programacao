<?php 

$id = $_GET['id'];
$row = $fluxoCaixa->find($id);
$row->fill($_POST);
$row->save();

redirect('modulos/index.php?modulo=fluxoCaixa&acao=listar');