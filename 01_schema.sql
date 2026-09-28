
CREATE DATABASE IF NOT EXISTS db_sistema_vendas
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;
USE db_sistema_vendas;


CREATE TABLE tbl_clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    cidade VARCHAR(50) DEFAULT 'São Paulo'
) ENGINE=InnoDB;


CREATE TABLE tbl_vendedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    percentual_comissao DECIMAL(5,2)
) ENGINE=InnoDB;


CREATE TABLE tbl_produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2),
    categoria VARCHAR(50),
    CONSTRAINT chk_preco_positivo CHECK (preco > 0)
) ENGINE=InnoDB;

-- 5. Tabela de Pedidos
CREATE TABLE tbl_pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_vendedor INT NOT NULL,
    Status VARCHAR(20) DEFAULT 'Em Processamento',
    FOREIGN KEY (id_cliente) REFERENCES tbl_clientes(id) ON DELETE RESTRICT,
    FOREIGN KEY (id_vendedor) REFERENCES tbl_vendedores(id) ON DELETE RESTRICT
) ENGINE=InnoDB;
