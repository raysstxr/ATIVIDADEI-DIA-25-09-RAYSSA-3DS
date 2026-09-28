<?php
// ====================================================================
// ARQUIVO DE CONEXÃO COM O BANCO DE DADOS (conexao.php)
// ====================================================================

// 1. Definição dos parâmetros de acesso ao servidor MySQL local
$servidor = "localhost";          // Endereço do servidor MySQL
$usuario  = "root";               // Usuário padrão do ambiente local (XAMPP/WampServer)
$senha    = "";                   // Senha padrão do root (geralmente vazia no XAMPP)
$banco    = "db_sistema_vendas";  // Nome do banco de dados

// 2. Realizando a conexão estruturada com a função mysqli_connect
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// 3. Testando se a conexão funcionou para avisar o aluno em caso de erro
if (!$conexao) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

// Configura o padrão de caracteres para aceitar acentos e ç corretamente
mysqli_set_charset($conexao, "utf8mb4");
?>
