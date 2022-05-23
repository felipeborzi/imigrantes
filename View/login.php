<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
</head>
<body>

<div class="container" id="t_container_login">
<div id="t_container_borde">
    <form action="login1.php" method="post">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="usuario" class="form-control" placeholder="Digite o Usuário" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" autocomplete="off" required>
        </div>
        <br>
        <div id="botton_rt">
            <button type="submit" class="btn btn-sm btn-success">Entrar</button>
        </div>
    </form> 

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>    
</body>
</html>