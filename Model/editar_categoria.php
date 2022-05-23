<?php
include '../conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title> Formulário de Edição </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
</head>
<body>

    <div class="container" id="t_container">
        <h4> Formulário de Edição</h4>
        <form action="atualizar_categoria.php" method="post" id="mg_form">
            <?php

            $sql ="SELECT * FROM `categoria` WHERE id_categoria = $id";
            $busca = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($busca)) {
                
                $id_categoria = $array['id_categoria'];
                $nome_categoria = $array['nome_categoria'];             

            ?>

            <div class="form-group">
                <label>Nome Categoria</label>
                <input type="text" class="form-control" name="nome_categoria" value="<?php echo $nome_categoria ?>">
                <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none">
            </div>
            <br/>
            <div id="botton_rt">        
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
         <?php } ?>
        </form>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

