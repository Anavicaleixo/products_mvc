<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="/mvc_produtos/css/style.css">
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form action="index.php?action=store" method="post">
        <label>Nome: <input type="text" name="nome" required></label>
        <label>Preço: <input type="number" step="0.01" name="preco" required></label>
        <label>Categoria: <input type="text" name="categoria" required></label>
        <button type="submit">Salvar</button>
    </form>
    <div class="nav-links">
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>