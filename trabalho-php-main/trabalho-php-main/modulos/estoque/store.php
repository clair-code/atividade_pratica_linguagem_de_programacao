<?php 
$row = new Estoques();
$row->fill($_POST);
$row->save();
redirect('modulos/index.php?modulo=estoque&acao=listar');