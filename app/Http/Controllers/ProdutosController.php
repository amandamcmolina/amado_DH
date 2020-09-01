<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\ImagemProduto; //MODEL

class ProdutosController extends Controller
{
    public function index(){
        //chamar todos os produtos do meu banco de dados
        // model::all()
        $produtos = Produto::all();
        $imagensProdutos = ImagemProduto::all();
        return view('teste', compact('produtos', 'imagensProdutos'));

    }
}
