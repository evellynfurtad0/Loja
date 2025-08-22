<?php
    require 'conexao.php';

    $nome = $_POST['produto'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $estoque); #pegando o que ta dentro do estoque e passando para a quantidade

    if ($stmt->execute()) {
      echo "Produto inserido com sucesso!";
    } else {
      echo "Erro ao inserir produto.";
    }
?>