<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatrar produtos</title>
</head>
<body>
    <form action= "{{route('produto.store')}}" method='post'>
        @csrf
        <label>Nome produto</label>
        <input type='text' name="nome" id="nome">
        <label for="">Fornecedor</label>
        <input type="text" name="fornecedor" id="fornecedor">
         <button>Cadastrar</button>
</body>
</html>