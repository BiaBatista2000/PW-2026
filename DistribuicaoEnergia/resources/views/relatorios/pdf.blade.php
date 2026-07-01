<!DOCTYPE html>
<html>
<head>
    <title>Relatório</title>
</head>
<body>

<h2>Relatório de Itens</h2>
<p>Período: {{ $periodo }}</p>

<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Estoque</th>
        <th>Preço</th>
    </tr>

    @foreach($itens as $item)
        <tr>
            <td>{{ $item->nome }}</td>
            <td>{{ $item->categoria }}</td>
            <td>{{ $item->estoque }}</td>
            <td>{{ $item->preco }}</td>
        </tr>
    @endforeach

</table>

</body>
</html>