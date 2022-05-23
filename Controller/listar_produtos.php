<!DOCTYPE html>
<html>
<head>
    <title> Listar Produtos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />    
</head>
<body>

    <div class="container" id="t_container_pd">
    <h3> Lista de Produtos</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nro Produto</th>
                <th scope="col">Nome Produto</th>
                <th scope="col">Tipo</th>
                <th scope="col">QTO</th>
                <th scope="col">Loja</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
            <tr>
                <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM `estoque` ORDER BY nrproduto";
                    $busca = mysqli_query($conexao,$sql);

                    while ($array = mysqli_fetch_array($busca)) {

                        $id_estoque = $array['id_estoque'];
                        $nrproduto = $array['nrproduto'];
                        $nomeproduto = $array['nomeproduto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];
                    
                ?>
                    <tr>
                        <td><?php echo $nrproduto ?></td>
                        <td><?php echo $nomeproduto ?></td>
                        <td><?php echo $categoria ?></td>
                        <td><?php echo $quantidade ?></td>
                        <td><?php echo $fornecedor ?></td>
                        <td><a class="btn btn-warning btn-sm" href="../view/editar_produto.php?id=<?php echo $id_estoque ?>" role="button">Editar</a></td>
                        <td><a class="btn btn-danger btn-sm" href="../model/deletar_produto.php?id=<?php echo $id_estoque ?>" role="button">Deletar</a></td>
                    </tr>    
                <?php } ?>

            </tr>       
    </table>
    <div id="botton_rt">
    <a href="../view/menu.php" role="button" class="btn btn-secondary">Voltar</a>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>    
</body>        
</html>
