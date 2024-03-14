<?php 
include "../db/conexao.php";

$idProduto = $_POST['idproduto'];
$produto = $_POST ['nome'];
$descricao = $_POST ['descricao'];

$sqlEdita = "UPDATE produto
SET nome = '{$produto}', descricao = '{$descricao}'
WHERE idproduto = {$idProduto}";


$resultado =  mysqli_query($conn, $sqlEdita);




