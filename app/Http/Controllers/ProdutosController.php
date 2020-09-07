<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
// use App\ImagemProduto; //MODEL


class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('teste', compact('produtos'));
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('testeDetalhes', compact('produto'));
    }

    public function create()
    {
        return view('adminProdutos.create');
    }

    // public function store(Request $request)
    // { requisição
    //     $input = $request->all();
    //     return $input;
    // }

    public function store()
    {
        //criar novo produto
        $produto = new Produto;

        //Atribuir valores do formulári ao produto criado
        $produto->nome = request('nome');
        $produto->descricao = request('descricao');
        $produto->marca = request('marca');
        $produto->quantidade = request('quantidade');
        $produto->preco = request('preco');

        $produto->save();
        return redirect('/admin/produtos');
    }
}
