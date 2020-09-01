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

    @endforeach

    @foreach ($imagensProdutos as $img )
        <img src="{{ url($img->caminhoDaImagem) }}">
    @endforeach


</body>
</html>