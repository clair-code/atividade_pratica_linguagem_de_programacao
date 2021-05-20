<?php

require_once('model.php');

class Material extends Model{
	
  protected $fillable =['nome',
    'quantidade',
    'tipo'];
  protected $columns =[
  	'id',
  	'nome',
    'quantidade',
    'tipo'];
    protected $table='material';
}