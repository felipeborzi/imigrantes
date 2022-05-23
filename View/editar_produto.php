<?php
include '../conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title> Formulário de Cadastro </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
</head>
<body>

    <div class="container" id="t_container">
        <h4> Formulário de Cadastro</h4>
        <form action="../model/atualizar_produto.php" method="post" id="mg_form">
            <?php

            $sql ="SELECT * FROM `estoque` WHERE id_estoque = $id";
            $busca = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($busca)) {
                
                $id_estoque = $array['id_estoque'];
                $nrproduto = $array['nrproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

            ?>
            <div class="form-group">
                <label>Numero do Produto</label>
                <input type="number" class="form-control" name="nrproduto" value="<?php echo $nrproduto ?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
            </div>
            
            <div class="form-group">
                <label>Tipo do Produto</label>
                <select class="form-select" name="categoria">
                    <?php

                    include '../conexao.php';
                    $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                    $buscar = mysqli_query($conexao,$sql);

                    while ($array = mysqli_fetch_array($buscar)) {
                        
                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['nome_categoria'];
                    ?>
                    <option><?php echo $nome_categoria ?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Loja</label>
                <select class="form-select" name="fornecedor" required>
                <?php
                    include '../conexao.php';
                    $sql2 = "SELECT * FROM fornecedor order by nome_forn ASC";
                    $buscar2 = mysqli_query($conexao,$sql2);

                    while ($array2 = mysqli_fetch_array($buscar2)) {
                        
                        $id_fornecedor = $array2['id_forn'];
                        $nome_fornecedor = $array2['nome_forn'];
                    ?>
                    <option><?php echo $nome_fornecedor ?></option>

                    <?php } ?>
                </select>
            </div>
            <br/>
            <div id="botton_rt">        
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
         <?php } ?>
        </form>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

