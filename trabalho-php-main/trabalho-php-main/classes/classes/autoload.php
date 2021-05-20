<?php
// include das classe
require('classes/banco.php');

require('classes/model.php');

require('classes/class_cadastros.php');

require('classes/class_cargos.php');

require('classes/class_categorias.php');

require('classes/class_filiais.php');

require('classes/class_fornecedores.php');

require('classes/class_produtos.php');

require('classes/class_usuarios.php');

require('classes/class_estoque_entradas.php');

require('classes/class_estoque_saidas.php');

require('classes/class_estoques.php');

require('classes/class_tipos_pagamentos.php');

require('classes/class_pagamentos.php');

require('classes/class_movimentos.php');


// instanciar class, aqui é apenas estancias que vamos usar como padrão porque n consguimos criar estaticos 

$cadastros = new  cadastros();

$cargos = new cargos();

$categorias = new categorias();

$filiais = new filiais();

$fornecedores = new fornecedores();

$produtos = new produtos();

$usuarios = new usuarios();

$estoques = new estoques();

$estoque_entradas = new estoque_entradas();

$estoque_saidas = new estoque_saidas();

$tipos_pagamentos = new tipos_pagamentos();

$pagamentos = new pagamentos();

$movimentos = new movimentos();
