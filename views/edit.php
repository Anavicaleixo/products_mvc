<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="/mvc_produtos/css/style.css">
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="index.php?action=update&id=<?php echo $produto['id']; ?>" method="post">
        <label>Nome: <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required></label>
        <label>Preço: <input type="number" step="0.01" name="preco" value="<?php echo $produto['preco']; ?>" required></label>
        <label>Categoria: <input type="text" name="categoria" value="<?php echo $produto['categoria']; ?>" required></label>
        <button type="submit">Atualizar</button>
    </form>
    <div class="nav-links">
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>