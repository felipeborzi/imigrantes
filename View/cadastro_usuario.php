<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Usuário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
</head>
<body>

<div class="container" id="t_container_cad">
<div id="t_container_borde">
    <h3>Cadastro de Usuário</h3>    
    <form action="insert_usuario.php" method="post">
        <div class="form-group">
            <label>Nome do Usuário</label>
            <input type="text" name="nomeusuario" class="form-control" placeholder="Nome Completo" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="mailusuario" class="form-control" placeholder="Digite o Email" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senhausuario" class="form-control" placeholder="Digite a Senha" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label>Nível de acesso</label>
            <select name="nivelusuario" class="form-control">                
                <option value="1">Administrador</option>
                <option value="2">Gerente</option>  
                <option value="3">Funcionario</option>               
            </select>
        </div>
        <br>
        <div id="botton_rt">
                <a href="menu.php" role="button" class="btn btn-secondary btn-sm">Voltar</a>
                <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>       
        </div>
    </form> 

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>    
</html>