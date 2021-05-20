
<?php

require_once('model.php');

class usuarios extends Model
{
	protected $fillable  = [
		'cadastro_id',
		'data_criacao',
		'senha',
		'acesso_gerente',
		'acesso_funcionario'


	]; // $fillable : campos que posso alterar
	protected $table = 'usuarios';
	protected $columns = [
		'id',
		'cadastro_id',
		'data_criacao',
		'senha',
		'acesso_gerente',
		'acesso_funcionario',
		'data_alteracao'

	];

	public function cadastros()
	{
		return $this->belongsTo('cadastros', $this->cadastro_id);
	}


	public function movimentos()
	{
		return $this->hasMany('movimentos', 'usuario_id', $this->id);
	}

	public function autenticacao($nome, $senha)
	{
		$rows = $this->where('senha', '=', $senha);

		foreach ($rows as $row) {
			if ($row->cadastros()->nome == $nome) {

				return ($row);
			}
		}
		return false;
	}
}
