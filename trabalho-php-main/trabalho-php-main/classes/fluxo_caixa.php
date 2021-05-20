<?php

require_once('model.php');

class Fluxo_de_caixa extends Model{

protected $table='fluxo_caixa';
 protected $fillalbe =[  
 	'valor',
  'origem',
  'funcionario',
  'data',
  'tipo'];

   protected $columns =[  
   	'id'
   	'valor',
  'origem',
  'funcionario',
  'data',
  'tipo'];

}