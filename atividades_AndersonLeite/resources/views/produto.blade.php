{{-- filepath: c:\dev\Laravel\atividades_AndersonLeite\resources\views\produto.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    @if ($produto)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Quantidade em Estoque</th>
                <th>Preço</th>
                <th>Importado</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->qtd_estoque }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->importado ? 'Sim' : 'Não' }}</td>
                <td>
                    <a href="/produtos">Voltar para a lista de produtos</a>
                    <a href="{{ route('produto.edit', $produto->id) }}">Editar</a>
                    <form action="{{ route('produto.delete', $produto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Produto não encontrado!</p>
    @endif

</body>
</html>
