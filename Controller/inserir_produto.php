<?php

include '../conexao.php';

// POST Formulário Produtos
$nrproduto = $_POST['nrproduto'];
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`( `nrproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nrproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
$inserir = mysqli_query($conexao,$sql);
?>

<!-- Mensagem de sucesso -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />

<div class="container" id="sucess_mensagem">
    <h4> Produto adicionado com sucesso! </h4>
    <br>
    <a href="../view/menu.php" role="button" class="btn btn-primary">Cadastrar novo Item</a>
</div>    