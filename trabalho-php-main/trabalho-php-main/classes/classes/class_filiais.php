
<?php

require_once('model.php');

class filiais extends Model{
	protected $fillable  = [
		  'nome' ,
		  'cnpj' ,
		  'administrador_id',
		  'endereco_nome' ,
		  'endereco_cep' ,
		  'endereco_numero' ,
		  'endereco_bairro' ,
		  'endereco_cidade' ,
		  'endereco_estado' ,
		  'contato_telefone' ,
		  'contato_celular' ,
		  'contato_email'


	]; // $fillable : campos que posso alterar
	protected $table = 'filiais';
	protected $columns =[
		  'id' ,
		  'nome' ,
		  'cnpj' ,
		  'administrador_id',
		  'endereco_nome' ,
		  'endereco_cep' ,
		  'endereco_numero' ,
		  'endereco_bairro' ,
		  'endereco_cidade' ,
		  'endereco_estado' ,
		  'contato_telefone' ,
		  'contato_celular' ,
		  'contato_email'
	];

	public function fornecedores(){
		return $this->hasMany('fornecedores','filial_id',$this->id);

	}

	public function cadastros(){
		return $this->belongsTo('cadastros',$this->administrador_id);

	}
}
