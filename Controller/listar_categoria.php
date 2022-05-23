<!DOCTYPE html>
<html>
<head>
    <title> Listar Categorias </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />    
</head>
<body>

    <div class="container" id="t_container">
    <h3> Lista de Categorias</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Categorias</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
            <tr>
                <?php
                    include '../conexao.php';
                    $sql = "SELECT * FROM `categoria` ORDER BY id_categoria";
                    $busca = mysqli_query($conexao,$sql);

                    while ($array = mysqli_fetch_array($busca)) {

                        $id_categoria = $array['id_categoria'];
                        $nomecategoria = $array['nome_categoria'];

                    
                ?>
                    <tr>
                        <td><?php echo $nomecategoria ?></td>

                        <td><a class="btn btn-warning btn-sm" href="../model/editar_categoria.php?id=<?php echo $id_categoria ?>" role="button">Editar</a></td>
                        <td><a class="btn btn-danger btn-sm" href="../model/deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button">Deletar</a></td>
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
