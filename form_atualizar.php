<?php
    include 'cabecalho.php';
    $id = $_GET['id'];
?>
<body>
    <div class="container">
        <h1>ATUALIZAÇÃO DE PRODUTOS</h1>
        <?php
            require 'conexao.php';
            $sql = "SELECT * FROM produtos WHERE id = $id";
            $stmt = $pdo->query($sql);
            $produto = $stmt->fetch(PDO::FETCH_ASSOC);
             
            // var_dump($produto);
                // echo "ID: " . $produto['id'] . "<br>";
                // echo "Nome: " . $produto['nome'] . "<br>";
                // echo "Preço: R$" . $produto['preco'] . "<br>";
                // echo "Estoque: " . $produto['estoque'] . "<br><br>";

        ?>
        <form action="#" method="POST">
            <div class="mb-3"> Nome:<input value="<?php echo $produto['nome'] ?>" 
                type="text" class="form-control" name="produto">
            </div>
            <div class="mb-3">
                Preço:<input
                value="<?php echo $produto['preco'] ?>" 
                type="text" class="form-control" name="preco">
            </div>
            <div class="mb-3">
                Quantidade:<input value=" <?php echo $produto['quantidade']?>"  
                type="text" class="form-control" name="estoque">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="index.php" type="button" class="btn btn-warning">Voltar</a>

             <!-- 
             SELECT * FROM produtos; seleciona todos os produtos

             UPDATE loja SET nome = "NOVO NOME" WHERE id = 1; troca o nome do produto, se não tivesse o id ia atualizar tudo
             SELECT * FROM produtos WHERE id = 1; 
             -->
            </div>
        </form>
    </div>
<?php
    include 'rodape.php';
?>