<?php

$servidor = "localhost";       
$usuario  = "root";              
$senha    = "";                   
$banco    = "db_sistema_vendas";  


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


if (!$conexao) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


mysqli_set_charset($conexao, "utf8mb4");
?>
