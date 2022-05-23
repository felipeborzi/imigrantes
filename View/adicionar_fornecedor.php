<!DOCTYPE html>
<html>
<head>    
    <title>Adicionar Fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />    
</head>
<body>

<div class="container" id="t_container">
    <h4>Cadastro de Fornecedor</h4>
    <br>
    <form action="../controller/inserir_fornecedor.php" method="post">
        <label>Fornecedor</label> 
        <div class="form-group">
            <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor">
        </div>
        <br> 
        <div id="botton_rt">
            <a href="menu.php" role="button" class="btn btn-secondary btn-sm">Voltar</a>
            <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>   
        </div>
        
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>    
</body>
</html>