
<?php

require_once('model.php');

class fornecedores extends Model{
	protected $fillable  = [
		  'nome' ,
		  'nome_fantasia' ,
		  'tipo_juridica' ,
		  'tipo_fisica' ,
		  'endereco_nome' ,
		  'endereco_cep' ,
		  'endereco_numero',
		  'endereco_bairro' ,
		  'endereco_cidade' ,
		  'endereco_estado' ,
		  'cnpj' ,
		  'filial_id' ,
		  'contato_celular' ,
		  'contato_telefone' ,
		  'contato_email' 


	]; // $fillable : campos que posso alterar
	protected $table = 'fornecedores';
	protected $columns =[
		  'id' ,
		  'nome' ,
		  'nome_fantasia' ,
		  'tipo_juridica' ,
		  'tipo_fisica' ,
		  'endereco_nome' ,
		  'endereco_cep' ,
		  'endereco_numero',
		  'endereco_bairro' ,
		  'endereco_cidade' ,
		  'endereco_estado' ,
		  'cnpj' ,
		  'filial_id' ,
		  'contato_celular' ,
		  'contato_telefone' ,
		  'contato_email' 
	];

	public function filiais(){
		return $this->belongsTo('filiais',$this->filial_id);

	}

	public function estoque_entradas(){
		return $this->hasMany('estoque_entradas','fornecedor_id',$this->id);

	}

	public function tipo_pessoa(){
			
				if ($this->tipo_juridica ==1)
					{return 'tipo_juridica';}
				
				if ($this->tipo_fisica ==1)
					{return 'tipo_fisica';}			
			
		
	}
}
