<?php

require_once('model.php');

class Pessoas extends Model{
	
  protected $fillable = ['nome',
    'email',
    'telefone',
    'rg',
    'cpf'];

  protected $columns = [
  	'id',
  	'nome',
    'email',
    'telefone',
    'rg',
    'cpf'];
    protected $table = 'pessoas';
}