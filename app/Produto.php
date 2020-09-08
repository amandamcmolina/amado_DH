<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = ['nome', 'descricao', 'marca', 'quantidade', 'preco'];

    //Adicionando relacionamento 1:n com ImagemProduto  - igual na tabela
    public function imagemProdutos(){
        return $this->hasMany('App\ImagemProduto');
    }

    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido', 'pedidos_produtos');
    }
}
