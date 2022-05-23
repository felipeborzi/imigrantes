<?php

include '../conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);

?>

<!-- Mensagem de sucesso -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />

<div class="container" id="sucess_mensagem">
    <h4> Produto deletado com sucesso! </h4>
    <br>
    <a href="../controller/listar_produtos.php" role="button" class="btn btn-primary">Voltar</a>
</div>