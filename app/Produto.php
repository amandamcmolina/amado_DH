<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Adicionando relacionamento 1:n com ImagemProduto  - igual na tabela
    public function imagemProdutos(){
        return $this->hasMany('App\ImagemProduto');
    }
}
