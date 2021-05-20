
<?php

require_once('model.php');

class cadastros extends Model{
	protected $fillable  = [
		'cargo_id',
		'nome',
		'cpf',
		'observacao',
		'data_nascimento',
		'endereco_nome',
		'endereco_bairro',
		'endereco_cep',
		'endereco_numero',
		'endereco_cidade',
		'endereco_estado',
		'contato_celular',
		'contato_email',
		'contato_telefone'


	]; // $fillable : campos que posso alterar
	protected $table = 'cadastros';
	protected $columns =[
		'id',
		'cargo_id',
		'nome',
		'cpf',
		'observacao',
		'data_nascimento',
		'endereco_nome',
		'endereco_bairro',
		'endereco_cep',
		'endereco_numero',
		'endereco_cidade',
		'endereco_estado',
		'contato_celular',
		'contato_email',
		'contato_telefone'
	];
	public function cargos(){
		return $this->belongsTo('cargos',$this->cargo_id);

	}

}
