<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//fornecedors
//fornecedores

class Fornecedor extends Model
{
    //
    //use SoftDeletes;

    //Utilizado para alterar o nome da tabela
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];

    public function produtos(){
       return $this->hasMany('App\Item', 'fornecedor_id', 'id');
       //return $this->hasMany('App\Item');
       
    }
}
