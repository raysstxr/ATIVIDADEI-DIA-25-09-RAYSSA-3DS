<?php
// ====================================================================
// PÁGINA PRINCIPAL DE CONSULTAS (index.php)
// ====================================================================

// 1. Importa o arquivo de conexão criado anteriormente
require_once "conexao.php";

// 2. Instrução SQL de consulta (DQL)
// Adaptado ao schema do exercício: a categoria é uma coluna de tbl_produtos
// (não existe tbl_categoria nem coluna de estoque), então não há JOIN.
$sql = "SELECT id, nome AS produto, preco, categoria
        FROM tbl_produtos
        ORDER BY id ASC";

// 3. Executa a consulta SQL dentro do banco de dados conectado
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ETEC - Consulta de Produtos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f8f9fa; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #fff; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Lista de Produtos Cadastrados (Integração PHP + MySQL)</h1>
    <p>Esta página executa o comando <strong>SELECT</strong> no MySQL e exibe o resultado abaixo:</p>

    <table>
        <thead>
            <tr>
                <th>Código (ID)</th>
                <th>Nome do Produto</th>
                <th>Categoria</th>
                <th>Preço (R$)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 4. Estrutura de repetição (while) para percorrer cada linha retornada pelo MySQL
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $linha['id'] . "</td>";
                echo "<td>" . htmlspecialchars($linha['produto']) . "</td>";
                echo "<td>" . htmlspecialchars($linha['categoria']) . "</td>";
                // Formata o valor numérico para a moeda brasileira (R$)
                echo "<td>R$ " . number_format($linha['preco'], 2, ',', '.') . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
<?php
// 5. Fecha a conexão com o banco de dados ao encerrar o script
mysqli_close($conexao);
?>
