<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    @foreach ( $produtos as $p )
        <p>{{ $p->nome }}</p>
        <p>{{ $p->descricao }}</p>
        <p>{{ $p->marca }}</p>
        <p>{{ $p->preco }}</p>
        <p>{{ $p->quantidade }}</p>
        
            @for($i=0; $i < count($p->imagemProdutos); $i++ )
                <img src=" {{ url($p->imagemProdutos[$i]->caminhoDaImagem) }} ">
            @endfor
    @endforeach

    {{-- @foreach ($imagensProdutos as $img )
        <img src="{{ url($img->caminhoDaImagem) }}">
    @endforeach --}}


</body>
</html>