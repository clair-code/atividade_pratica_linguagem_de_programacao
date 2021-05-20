
<?php

require_once('model.php');

class tipos_pagamentos extends Model{
	protected $fillable  = [
		'nome'


	]; // $fillable : campos que posso alterar
	protected $table = 'tipos_pagamentos';
	protected $columns =[
		'id',
		'nome'
		
	];

	public function pagamentos(){
		return $this->hasMany('pagamentos','tipo_pagamento_id',$this->id);

	}

}

