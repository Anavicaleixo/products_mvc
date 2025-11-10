<?php
require_once __DIR__ . '/../config/database.php';

class Produto {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    // Listar todos os produtos
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Buscar produto por ID
    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM produtos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Adicionar produto
    public function create($nome, $preco, $categoria) {
        $stmt = $this->pdo->prepare("INSERT INTO produtos (nome, preco, categoria) VALUES (?, ?, ?)");
        return $stmt->execute([$nome, $preco, $categoria]);
    }

    // Atualizar produto
    public function update($id, $nome, $preco, $categoria) {
        $stmt = $this->pdo->prepare("UPDATE produtos SET nome = ?, preco = ?, categoria = ? WHERE id = ?");
        return $stmt->execute([$nome, $preco, $categoria, $id]);
    }

    // Excluir produto
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM produtos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>