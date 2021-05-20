
<?php

require_once('model.php');

class categorias extends Model{
	protected $fillable  = [
		'nome'


	]; // $fillable : campos que posso alterar
	protected $table = 'categorias';
	protected $columns =[
		'id',
		'nome'
	];

	public function produtos(){
		return $this->hasMany('produtos','categoria_id',$this->id);

	}

}
