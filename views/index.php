<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="/mvc_produtos/css/style.css">

</head>
<body>
    <h1>Produtos</h1>
    <div class="nav-links">
        <a href="index.php?action=create">Adicionar Produto</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?php echo $produto['id']; ?></td>
                    <td><?php echo $produto['nome']; ?></td>
                    <td><?php echo $produto['preco']; ?></td>
                    <td><?php echo $produto['categoria']; ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo $produto['id']; ?>">Editar</a>
                        <a href="index.php?action=delete&id=<?php echo $produto['id']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>