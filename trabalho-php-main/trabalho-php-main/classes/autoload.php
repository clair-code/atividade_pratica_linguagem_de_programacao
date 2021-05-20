<?php
// include das classe
require('classes/banco.php');

require('classes/model.php');

require('classes/estoque.php');

require('classes/material.php');

require('classes/pessoas.php');

require('classes/fluxo_de_caixa.php');

require('classes/fornecedores.php');

require('classes/functions.php');

// instanciar class, aqui é apenas estancias que vamos usar como padrão porque n consguimos criar estaticos 

$pessoas = new  Pessoas();

$estoque = new Estoque();

$material = new Material();

$fluxoCaixa = new Fluxo_de_caixa();

$fornecedores = new Fornecedores();
