
<?php

require_once('model.php');

class estoque_entradas extends Model
{
	protected $fillable  = [
		'quantidade',
		'produto_id',
		'fornecedor_id',
		'data_entrada',
		'estoque_id'


	]; // $fillable : campos que posso alterar
	protected $table = 'estoque_entradas';
	protected $columns = [
		'id',
		'quantidade',
		'produto_id',
		'fornecedor_id',
		'data_entrada',
		'estoque_id',
		'created_at',
		'updated_at'

	];

	public function produtos()
	{
		return $this->belongsTo('produtos', $this->produto_id);
	}

	public function fornecedores()
	{
		return $this->belongsTo('fornecedores', $this->fornecedor_id);
	}

	public function estoques()
	{
		return $this->belongsTo('estoques', $this->estoque_id);
	}
}
