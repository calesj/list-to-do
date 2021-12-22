<?php


class Item
{
    private $pdo;

    public function __construct(pdo $pdo)
    {
        $this->pdo = $pdo;
    }
    public function exibirTodos(): array
    {
        $stmt = $this->pdo->prepare("select * from lista");
        $stmt->execute();
        $dados = $stmt->fetchAll();
        return $dados;
    }

    public function adicionar(string $conteudo)
    {
        require_once "../conexao.php";

        $stmt = $this->pdo->prepare("INSERT INTO lista (conteudo) VALUES (?)");
        $stmt->bindParam(1, $conteudo);
        $stmt->execute();
        header("Location: ../index.php");
    }

    public function deletar(string $id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM lista WHERE id=?");
        $stmt->execute([$id]);
        header("Location: ../index.php");
    }
}
