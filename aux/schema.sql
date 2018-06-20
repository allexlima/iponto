--CREATE DATABASE punch_clock_db ENCODING 'UTF8';
--\c punch_clock_db;

CREATE EXTENSION citext;
CREATE EXTENSION chkpass;

-- tabela 'Colaboradores' agora é 'p_colab'

CREATE TABLE p_colab(
    colab_id SMALLSERIAL NOT NULL,
    colab_nome VARCHAR(50),
    colab_email CITEXT NOT NULL UNIQUE,
    colab_senha CHKPASS NOT NULL,
	colab_funcao VARCHAR(50),
	colab_supervisor BOOL DEFAULT false,
    PRIMARY KEY(colab_id),	
);

-- tabela 'Pontos' agora é 'p_pts'

CREATE TABLE p_ponto(
    ponto_id SMALLSERIAL NOT NULL,
    ponto_user SMALLSERIAL NOT NULL,
    ponto_inicio TIMESTAMP NOT NULL,
    ponto_fim TIMESTAMP,
    ponto_is_fechado BOOL DEFAULT false,
    PRIMARY KEY(ponto_id),
    FOREIGN KEY(ponto_user) REFERENCES p_colab (colab_id)
);

INSERT INTO p_colab (colab_nome, colab_email, colab_senha, colab_supervisor) 
	VALUES ('Admin', 'admin@123.com', 'admin@123', True);
