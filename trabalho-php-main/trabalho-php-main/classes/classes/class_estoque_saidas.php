
<?php

require_once('model.php');

class estoque_saidas extends Model{
	protected $fillable  = [
		  'produto_id' ,
		  'quantidade' ,
		  'desconto',
		  'valor_total',
		  'pagamento_id'

	]; // $fillable : campos que posso alterar
	protected $table = 'estoque_saidas';
	protected $columns =[
		  'id',
		  'produto_id' ,
		  'quantidade' ,
		  'desconto',
		  'valor_total',
		  'pagamento_id'
	];

	public function movimentos(){
		return $this->hasMany('movimentos','estoque_saida_id',$this->id);

	}
	
	public function pagamentos(){
		return $this->belongsTo('pagamentos',$this->pagamento_id);

	}
}