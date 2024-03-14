<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

>
</head>

<body>
    <div class="container">
    <div class="mt-2 mb-2">
        <h1>Gerenciador de produtos</h1>
    </div>

    <div class="campo">
        <form action="./funcoes/cadastraProduto.php" method="post">
            <label for="produto" class="form-label">Produto</label>
            <br>
            <input type="text" name="produto" class="form-control">

            <br>

            <label for="descricao" class="form-label" >Descrição do Produto</label>
            <br>
            <input type="text" name="descricao" class="form-control">

            <br>

            <button type="submit" class="btn btn-primary">Cadastrar </button>
    </form>
    </div>

<div>
    <h1 class="mt-2 mb-2 ">Lista de Produtos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>               
                <th>Nome do Produto</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id=listaProdutos>
            <?php 
            include "../projeto/db/conexao.php";

            $sql = "SELECT idproduto, nome, descricao FROM produto";
            $resultado = $conn->query($sql);
            
            if ($resultado->num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['descricao'] . "</td>";
                    echo "<td> <a href = 'edicaoProduto.php?idproduto={$row['idproduto']}'> Editar </a> <a href = '#'> Excluir </a> </td>" ;
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            } 

            ?>
            
        </tbody>
    </table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>