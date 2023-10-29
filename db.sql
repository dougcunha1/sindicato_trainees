CREATE DATABASE sindicato_trainees;

USE sindicato_trainees;

CREATE TABLE Filiados (
    filiado_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    filiado_usuario VARCHAR(255) NOT NULL UNIQUE,
    filiado_tipo_conta CHAR(1) NOT NULL,
    filiado_senha VARCHAR(255) NOT NULL,
    filiado_nome VARCHAR(255) NOT NULL,
    filiado_cpf VARCHAR(255) NOT NULL UNIQUE,
    filiado_rg VARCHAR(255) NOT NULL UNIQUE,
    filiado_data_nascimento DATE NOT NULL,
    filiado_idade VARCHAR(3) NOT NULL,
    filiado_empresa VARCHAR(255),
    filiado_cargo VARCHAR(255),
    filiado_situacao VARCHAR(255),
    filiado_telefone_residencial VARCHAR(255),
    filiado_celular VARCHAR(255),
    filiado_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    filiado_updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Dependentes (
    dependente_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    dependente_nome VARCHAR(255) NOT NULL,
    dependente_data_nascimento DATE NOT NULL,
    dependente_grau_parentesco VARCHAR(255) NOT NULL
);

ALTER TABLE Dependentes
ADD COLUMN filiado_id INT NOT NULL;

ALTER TABLE Dependentes
ADD FOREIGN KEY (filiado_id) REFERENCES Filiados(filiado_id) ON DELETE CASCADE;

INSERT INTO Filiados (filiado_usuario, filiado_tipo_conta, filiado_senha, filiado_nome, filiado_cpf, filiado_rg, filiado_data_nascimento, filiado_idade, filiado_empresa, filiado_cargo, filiado_situacao, filiado_telefone_residencial, filiado_celular) VALUES ('admin@admin.com', 'A', '123456', 'Administrador', '123456738901', '1234563789', '1990-01-01', '30', 'Sindicato', 'Administrador', 'Ativo', '123456789', '123456789');

INSERT INTO Dependentes (dependente_nome, dependente_data_nascimento, dependente_grau_parentesco, filiado_id) VALUES ('Dependente 1', '1990-01-01', 'Filho', 1);

SELECT * FROM Filiados;
SELECT * FROM Dependentes;
