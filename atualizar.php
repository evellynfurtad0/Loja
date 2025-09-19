<?php
    require 'conexao.php';

    $id = $_GET['id'];
    $nome_novo = $_POST['produto'];
    $preco_novo = $_POST['preco'];
    $quantidade_novo = $_POST['estoque'];    

    $sql = "UPDATE produtos 
    SET nome = :nome_novo, preco = :preco_novo, quantidade = :quantidade_novo 
    WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome_novo', $nome_novo);
    $stmt->bindParam(':preco_novo', $preco_novo);
    $stmt->bindParam(':quantidade_novo', $quantidade_novo);

    if ($stmt->execute()) {
       header("location: inserir.php");
    } else {
        echo "Erro ao atualizar produto.";
    }
?>