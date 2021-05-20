<?php 
$row = new Fluxo_de_caixa();
$row->fill($_POST);
$row->save();
redirect('modulos/index.php?modulo=fluxoCaixa&acao=listar');