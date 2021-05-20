<?php 
$row = new Pessoas();
$row->fill($_POST);
$row->save();
redirect('modulos/index.php?modulo=pessoas&acao=listar');