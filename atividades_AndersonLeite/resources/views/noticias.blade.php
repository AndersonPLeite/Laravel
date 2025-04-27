<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Últimas notícias do mercado financeiro</title>
</head>
<body>
    <h1>Últimas notícias do mercado financeiro</h1>
    @if ($noticias->count()>0)
            <div class="noticia">
                @foreach($noticias as $item)
                    <div class="noticia-item">
                        <h3><a href="/noticias/{{ $item->id }}">{{ $item->titulo }}</a></h3>
                        <p>{{ $item->descricao }}</p>
                    </div>
                @endforeach
            </div>
    @else
        <p>Notícias não encontradas! </p>
    @endif
</body>
</html>
