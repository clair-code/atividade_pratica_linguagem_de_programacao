<?php

require_once('banco.php');


class Model {

	protected $conn ;

	protected $fillable = []; //array de colunas que podem ser inseridas/atualizadas
	
	protected $table = '';//nome da tabela, sera preenchida pelas filhas

	protected $columns = [];//array com todos os campos, preenchido por filhos pra evitar consultar desnecessarias

	protected $primaryKey = 'id' ;// por padrão, mas caso necessario


	function __construct() {
		foreach ($this->columns as $column) {
			$this->{$column};
		}
		$this->conn = DB::Conexao();
	} //setar as varaveis variaveis

	function __invoke(){
		$output = [];
		foreach ($this->columns as $column) {
			$output[$column]=$this->{$column};
		}
		return($output);
	}

	public function getClassName() {
        return static::class;
    }


	public function fill($dados){
		foreach ($this->fillable as $key) {
			$this->{$key} = $dados[$key];
		
		}
	} // funcao filtrar array de acordo com a fillable e postar nas variaveis


	public function save(){ 
		if($this->id){
			$this->update();
		}else{
			$this->insert();
		}
	}// funcao para inserir o atributos atuais no banco (insert/update)


	public function delete($id){
		$class = $this->getClassName();
		$linha = $class::find($id);
		$linha->destroy();
	}//metodo de deleção

	public  function all(){

		$sql = 'SELECT ';

		foreach ($this->columns as $index =>$key) {
			$sql.=($index==0)?'':',';
			$sql .= "$key as $key";
		}
		$sql .= " FROM $this->table;";

		 $rowns = DB::resultAll($sql); // select array where id / fetchAll
		 $class = $this->getClassName();
		 $lista = [];
		 
		 foreach ($rowns as $row) {
			$obj = new $class();
		 foreach($row as $key => $value){
		 
		 	$obj->{$key} = $value;
		 	
		 }
		 array_push($lista,$obj);
		}
		 return $lista;

	}// select * from table

	public  function find($id){

		$sql = 'SELECT ';
		
		foreach ($this->columns as $index => $key) {
			$sql.=($index==0)?'':',';
			$sql .= "$key as $key";
		}
		$sql .= " FROM $this->table WHERE id = $id;";

		 $select = DB::result($sql); // select array where id / fetch
		 $class = $this->getClassName();
		 $obj = new $class();

		 foreach($select as $key => $value){
		 	
		 	$obj->{$key} = $value;
		 }
		 return $obj;
	}// select where $id

	 public function where($campo,$modificador,$valor){
		$sql = 'SELECT ';

		foreach ($this->columns as $index =>$key) {
			$sql.=($index==0)?'':',';
			$sql .= "$key as $key";
		}

		$sql .= " FROM $this->table WHERE $campo $modificador ";
		if(is_string($valor)){
			$sql.="'$valor'";
		}else{
			$sql.="$valor";
		}
		 $rowns = DB::resultAll($sql); // select array where id / fetchAll
		 $class = $this->getClassName();
		 $lista = [];
		 
		 

		 foreach ($rowns as $row) {
			$obj = new $class();
		 foreach($row as $key => $value){
		 
		 	$obj->{$key} = $value;
		 	
		 }
		 array_push($lista,$obj);
		}
		 return $lista;



	 }// where('preco','>','10')

	protected function hasMany($dependencia,$foreignKey,$id){
		
		$resultado = new $dependencia();
		
		return $resultado->where($foreignKey,'=',$id);

	 }//estoques hasMany('estoques_entradas','estoque_id',this->id)

	protected function belongsTo($dependencia,$id){
		
		$resultado = new $dependencia();
		
		return $resultado->find($id);

	 }//estoques hasMany('estoques_entradas','estoque_id',this->id)

	protected function insert(){
		$sql= "INSERT INTO $this->table(";//query

		foreach ($this->fillable as $index => $key) {
			$sql .= ($index == 0)?'':',';
			$sql .= "$key";
		}

		$sql .= ") VALUES (";

		foreach ($this->fillable as $index => $key) {
			$sql .= ($index == 0)?'':',';
			$sql .= "?";
		}

		$sql .= ") ;";

		$insert = [];

		foreach ($this->fillable as  $key) {
			 array_push($insert,$this->{$key});
			 
			// $insert=$this->$key;

			// $insert[$key] = $this->{$key};
		}
		
		$stmt = $this->conn->prepare($sql);
		$status = $stmt->execute($insert);//pdo
		if($status){

		$this->id=DB::insertId();

			return $status;
		}
		else{
			echo 'erro de insert';
			die();
		}

	}//query de insert

	protected function update(){

		$sql= "UPDATE $this->table SET ";//query

		foreach ($this->fillable as $index => $key) {
			$sql .= ($index == 0)?'':',';
			$sql .= "$key = ?";
		}


		$sql .= " WHERE ID = ?";

		// $insert = [];
		// foreach ($this->fillable as $key) {
		//	$insert[$key] = $this->{$key};
		// }



		$update = [];
		foreach ($this->fillable as $key) {
			 array_push($update,$this->{$key});
		}

		array_push($update,$this->id);

		$stmt = $this->conn->prepare($sql);

		$status = $stmt->execute($update);//pdo

		if($status){
			return $status;
		}
		else{
			echo 'erro de update';
			die();
		}
	}//query de insert

	public function destroy(){
		$sql= "DELETE FROM $this->table WHERE ID = $this->id;";//query

		$stmt = $this->conn->prepare($sql);

		$status = $stmt->execute();//pdo

		if($status){
			return $status;
		}
		else{
			echo 'erro de delete';
			die();
		}
		//query delete from $this->table where id = $this->id;
	}//query de delete


}
