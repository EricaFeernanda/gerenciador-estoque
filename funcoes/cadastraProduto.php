<?php 
include "../funcoes/conexao.php";

$produto = $_POST ['produto'];
$descricao = $_POST ['descricao'];

if ($produto === '')
{
    echo 'Produto não cadastrado! Nome do produto é obrigatório';
    die();
}

$sqlInsert = "INSERT INTO produto (nome, descricao) VALUES ('{$produto}', '{$descricao}')";
$queryInsert = mysqli_query($conn, $sqlInsert);

if ($queryInsert) 
{
    header('Location: /projeto');
    
}
else 
{
    echo 'Produto não cadastrado!';
    
}

?>