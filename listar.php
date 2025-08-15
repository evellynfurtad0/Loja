<?php
    include 'cabecalho.php';
?>

<body>
    <div class="container">
        <h1>Sistema Web com CRUD</h1>
        <h2>Lista de Produtos</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">PREÇO</th>
                        <th scope="col">QUANTIDADE</th>
                        <th scope="col">OPÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Teclado Gamer</td>
                        <td>120,99</td>
                        <td>10</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="#" type="button" class="btn btn-danger">Atualizar</a>
                                <a href="#" type="button" class="btn btn-warning">Apagar</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Monitor LCD 20 polegadas</td>
                        <td>599,99</td>
                        <td>70</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="#" type="button" class="btn btn-danger">Atualizar</a>
                                <a href="#" type="button" class="btn btn-warning">Apagar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="index.php" type="button" class="btn btn-warning">Voltar</a>
    </div>
<?php
    include 'rodape.php';
?>