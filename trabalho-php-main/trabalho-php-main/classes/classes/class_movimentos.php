
<?php

require_once('model.php');

class movimentos extends Model{
	protected $fillable  = [
		  'usuario_id' ,
		  'observacao' 

	]; // $fillable : campos que posso alterar
	protected $table = 'movimentos';
	protected $columns =[
		  'id',
		  'usuario_id' ,
		  'observacao' ,
		  'pagamento_id',
		  'estoque_saida_id',
		  'created_at',
		  'updated_at'
	];

	public function pagamentos(){
		return $this->belongsTo('pagamentos',$this->pagamento_id);

	}
	
	public function estoque_saidas(){
		return $this->belongsTo('estoque_saidas',$this->estoque_saida_id);

	}
}