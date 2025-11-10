<?php
require_once __DIR__ . '/../models/produto.php';

class ProdutoController {
    private $produtoModel;

    public function __construct() {
        $this->produtoModel = new Produto();
    }

    // Listar produtos
    public function index() {
        $produtos = $this->produtoModel->getAll();
        require __DIR__ . '/../views/index.php';
    }

    // Exibir formulário de criação
    public function create() {
        require __DIR__ . '/../views/create.php';
    }

    // Salvar novo produto
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $categoria = $_POST['categoria'];
            $this->produtoModel->create($nome, $preco, $categoria);
            header('Location: index.php');
        }
    }

    // Exibir formulário de edição
    public function edit($id) {
        $produto = $this->produtoModel->getById($id);
        require __DIR__ . '/../views/edit.php';
    }

    // Atualizar produto
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $categoria = $_POST['categoria'];
            $this->produtoModel->update($id, $nome, $preco, $categoria);
            header('Location: index.php');
        }
    }

    // Excluir produto
    public function delete($id) {
        $this->produtoModel->delete($id);
        header('Location: index.php');
    }
}
?>