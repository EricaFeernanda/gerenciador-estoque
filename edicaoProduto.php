<?php 
$idProduto = $_GET['idproduto'];
?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
</head>
<body>

<div>    
    <h1>Editar Produtos</h1>
    <form action="./includes/editaProduto.php" method="post">
        <label for="produto" class="form-label">Altere o nome do Produto</label>
        <br>
        <input type="text" name="nome" class="form-control">
        <input type="text" name="idproduto" value="<?php echo $idProduto ?>" hidden>

        <br>

        <label for="descricao" class="form-label" >Altere a descrição do Produto</label>
        <br>
        <input type="text" name="descricao" class="form-control">

        <br>

        <button type="submit" class="btn btn-primary">Editar </button>
    </form>
    </div>
</body>
</html>