<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['user_id'];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function produtos()
    {
        return $this->belongsToMany('App\Produto', 'pedidos_produtos');
    }
}
