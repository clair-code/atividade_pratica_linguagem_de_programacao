<?php 

$id = $_GET['id'];
$row = $fluxoCaixa->find($id);
$row->delete();

redirect('modulos/index.php?modulo=fluxoCaixa&acao=listar');