<?php
include '../conexao.php';

$usuario = $_POST['usuario'];
$senhausuario= $_POST['senha'];

$sql = "SELECT mail_usuario,senha_usuario FROM usuarios WHERE mail_usuario = '$usuario'";
$buscar = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {
        $senha = $array['senha_usuario'];

$senhacod = ($senhausuario);

    if ($total > 0 && $senhacod == $senha) {      
        header('location: menu.php');         
    }else {
        header('location: erro.php');
    }

}

?>