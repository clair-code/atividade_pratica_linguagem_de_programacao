<?php

require_once('model.php');

class Fornecedores extends Model{
	
	protected $table='fornecedores';
  protected $fillalble=[
  	'nome',
    'nome_fantasia',
    'responsavel',
    'produtos',
    'cnpj'];
  protected $columns=[
  	'id',
  	'nome',
    'nome_fantasia',
    'responsavel',
    'produtos',
    'cnpj'];


}