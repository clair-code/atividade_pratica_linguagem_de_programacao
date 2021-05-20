<?php 
$row = new Material();
$row->fill($_POST);
$row->save();
redirect('modulos/index.php?modulo=material&acao=listar');