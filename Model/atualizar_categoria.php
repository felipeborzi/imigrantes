<?php

include '../conexao.php';

$id = $_POST['id'];
$nome_categoria = $_POST['nome_categoria'];


$sql = "UPDATE `categoria` SET `nome_categoria`='$nome_categoria' WHERE id_categoria = $id";
$atualizar = mysqli_query($conexao,$sql);
?>

<!-- Mensagem de sucesso -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />

<div class="container" id="sucess_mensagem">
    <h4> Categoria Atualizado com sucesso! </h4>
    <br>
    <a href="../controller/listar_categoria.php" role="button" class="btn btn-primary">Voltar</a>
</div>
