<?php

include '../conexao.php';
// Deixei sem Sha1 para visualizar as senhas
//include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status ='Ativo';

$sql = "INSERT INTO `usuarios` (`nome_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status`) values ('$nomeusuario','$mail','$senha',$nivel,'$status')";
$inserir = mysqli_query($conexao,$sql);

?>

<!-- Mensagem de sucesso -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

<div class="container" id="sucess_mensagem">
    <h4> Usuário adicionado com sucesso! </h4>
    <br>
    <a href="../view/cadastro_usuario.php" role="button" class="btn btn-primary">Cadastrar novo Usuário</a>
</div> 