
<?php

require_once('model.php');

class pagamentos extends Model{
	protected $fillable  = [
		  'valor_recebido' ,
		  'desconto' ,
		  'cliente_id',
		  'usuario_id',
		  'valor_total',
		  'tipo_pagamento_id'



	]; // $fillable : campos que posso alterar
	protected $table = 'pagamentos';
	protected $columns =[
		  'id',
		  'valor_recebido' ,
		  'desconto' ,
		  'cliente_id',
		  'usuario_id',
		  'valor_total',
		  'tipo_pagamento_id',
		  'data_pagamento'
	];

	public function movimentos(){
		return $this->hasMany('movimentos','pagamento_id',$this->id);

	}
	
	public function estoque_saidas(){
		return $this->hasMany('estoque_saidas','pagamento_id',$this->id);

	}

	public function usuarios(){
		return $this->belongsTo('usuarios',$this->usuario_id);

	}

	public function clientes(){
		return $this->belongsTo('cadastros',$this->cliente_id);

	}

	public function data_venda(){
		$data = date("d/m/Y H:i", strtotime($this->data_pagamento));
		return implode(' às ',explode(' ',$data));
	}
}