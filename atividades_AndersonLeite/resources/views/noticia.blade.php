<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notícia</title>
</head>
<body>
    <h1>Notícia</h1>
    @if ($noticia)
        <h2>{{ $noticia->titulo }}</h2>
        <p>{{ $noticia->descricao }}</p>
        <p><strong>Data:</strong> {{ $noticia->data }}</p>
    @else
        <p>Notícia não encontrada!</p>
    @endif
    <a href="/noticias">Voltar para a lista de notícias</a>
</body>
</html>
