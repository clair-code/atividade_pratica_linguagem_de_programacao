
<?php

require_once('model.php');

class cargos extends Model{
	protected $fillable  = [
		'nome'


	]; // $fillable : campos que posso alterar
	protected $table = 'cargos';
	protected $columns =[
		'id',
		'nome'
		
	];

	public function cadastros(){
		return $this->hasMany('cadastros','cargo_id',$this->id);

	}

}



