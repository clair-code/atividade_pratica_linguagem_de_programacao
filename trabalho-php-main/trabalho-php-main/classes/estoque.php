<?php
require_once('model.php');

class Estoque extends Model{
  
 protected $table='estoque';
 protected $columns = [
  'id',
  'material',
 'valor',
 'fornecedor',
 'entrada',
 'saida'
 ];
  protected $fillable = [
  'material',
 'valor',
 'fornecedor',
 'entrada',
 'saida'
 ];
}
 