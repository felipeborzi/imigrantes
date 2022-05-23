<?php

include '../conexao.php';

$id = $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";
$atualizar = mysqli_query($conexao,$sql);
?>

<!-- Mensagem de sucesso -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />

<div class="container" id="sucess_mensagem">
    <h4> Produto Atualizado com sucesso! </h4>
    <br>
    <a href="../controller/listar_produtos.php" role="button" class="btn btn-primary">Voltar</a>
</div>
