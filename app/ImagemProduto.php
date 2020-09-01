<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagemProduto extends Model
{
    public function produtos(){
        return $this->belongsTo('App\Produto');
    }
}
