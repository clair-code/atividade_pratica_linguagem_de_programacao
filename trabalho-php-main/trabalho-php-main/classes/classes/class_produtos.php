
<?php

require_once('model.php');

class produtos extends Model{
	protected $fillable  = [
		'nome',
		'data_vencimento',
		'observacao',
		'preco_unitario',
		'categoria_id',
		'codigo_produto'

	]; // $fillable : campos que posso alterar
	protected $table = 'produtos';
	protected $columns =[
		'id',
		'nome',
		'data_vencimento',
		'observacao',
		'preco_unitario',
		'categoria_id',
		'codigo_produto',
		'created_at',
		'updated_at'

	];

	public function categorias(){
		return $this->belongsTo('categorias',$this->categoria_id);

	}

	public function estoques(){
		return $this->hasMany('estoques','produto_id',$this->id);

	}

	public function estoque_entradas(){
		return $this->hasMany('estoque_entradas','produto_id',$this->id);

	}

	public function movimentos(){
		return $this->hasMany('movimentos','produto_id',$this->id);

	}
}
