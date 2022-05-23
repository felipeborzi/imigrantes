<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
</head>
<body>
<div id="botton_rt">
    <a href="login.php" role="button" class="btn btn-secondary">Voltar</a>
    </div>
<div class="container" id="mg_con_menu">

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Categoria</h5>
                <p class="card-text">Opção para adicionar categoria de produtos.</p>
                <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Produto</h5>
                <p class="card-text">Opção para adicionar produtos no estoque.</p>
                <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar</a>
            </div>
            </div>
        </div>


        <div class="col-sm-6" id="mg_form">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Fornecedor</h5>
                <p class="card-text">Opção para adicionar fornecedores no sistema.</p>
                <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6" id="mg_form">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de produto</h5>
                <p class="card-text">Edições e visualizações dos Produtos via lista.</p>
                <a href="../controller/listar_produtos.php" class="btn btn-primary">Visualizar</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6" id="mg_form">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de categoria</h5>
                <p class="card-text">Edições e visualizações das categoria via lista.</p>
                <a href="../controller/listar_categoria.php" class="btn btn-primary">Visualizar</a>
            </div>
            </div>
        </div>
    </div>
    
    
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>    
</html>