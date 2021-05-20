
<?php

require_once('model.php');

class estoques extends Model
{
    protected $fillable  = [
        'produto_id',
        'quantidade_total'

    ]; // $fillable : campos que posso alterar
    protected $table = 'estoques';
    protected $columns = [
        'id',
        'produto_id',
        'quantidade_total',
        'created_at',
        'updated_at'


    ];
    public function produtos()
    {
        return $this->belongsTo('produtos', $this->produto_id);
    }
    public function estoque_entradas()
    {
        return $this->hasMany('estoque_entradas', 'estoque_id', $this->id);
    }
}
