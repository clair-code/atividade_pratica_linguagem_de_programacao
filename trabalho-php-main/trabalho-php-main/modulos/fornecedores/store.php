<?php 
$row = new Fornecedores();
$row->fill($_POST);
$row->save();
redirect('modulos/index.php?modulo=fornecedores&acao=listar');