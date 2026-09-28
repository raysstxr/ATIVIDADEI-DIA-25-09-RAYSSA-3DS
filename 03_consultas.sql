USE db_sistema_vendas;


SELECT nome AS Nome_Produto, preco AS Valor_Unitario
FROM tbl_produtos;


SELECT nome, percentual_comissao
FROM tbl_vendedores
ORDER BY percentual_comissao DESC;


SELECT * FROM tbl_produtos
WHERE categoria = 'Games' AND preco > 200.00;


SELECT * FROM tbl_clientes
WHERE cidade IN ('Campinas', 'Santos')
ORDER BY nome ASC;
