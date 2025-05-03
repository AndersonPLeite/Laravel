<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="{{ route('update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome"/></td>
        </tr>
        <tr>
            <td>Descricao:</td>
            <td><textarea name="descricao" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Quantidade em Estoque:</td>
            <td><input type="text" name="qtd_estoque"/></td>
        </tr>
        <tr>
            <td>Preço:</td>
            <td><input type="number" name="preco"/></td>
        </tr>
        <tr>
            <td>Importado:</td>
            <td><input type="checkbox" name="importado"/></td>
        </tr>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
