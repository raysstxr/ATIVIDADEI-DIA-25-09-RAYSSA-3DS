USE db_sistema_vendas;

-- NÍVEL 1: CONSULTAS BÁSICAS (DQL)

-- 1.1
SELECT nome AS Nome_Produto, preco AS Valor_Unitario
FROM tbl_produtos;

-- 1.2
SELECT nome, percentual_comissao
FROM tbl_vendedores
ORDER BY percentual_comissao DESC;

-- 1.3
SELECT * FROM tbl_produtos
WHERE categoria = 'Games' AND preco > 200.00;

-- 1.4
SELECT * FROM tbl_clientes
WHERE cidade IN ('Campinas', 'Santos')
ORDER BY nome ASC;
