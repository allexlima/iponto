--CREATE DATABASE iponto_db ENCODING 'UTF8';
--\c iponto_db;

CREATE EXTENSION citext;
CREATE EXTENSION chkpass;

-- tabela 'Colaboradores' agora é 'i_colab'

CREATE TABLE i_colab(
  colab_id SMALLSERIAL NOT NULL,
  colab_nome VARCHAR(50),
  colab_email CITEXT NOT NULL UNIQUE,
  colab_senha CHKPASS NOT NULL,
  colab_funcao VARCHAR(50),
  colab_supervisor BOOL DEFAULT false,
  PRIMARY KEY(colab_id)
);

-- tabela 'Pontos' agora é 'i_ponto'

CREATE TABLE i_ponto(
  ponto_id SMALLSERIAL NOT NULL,
  ponto_user SMALLSERIAL NOT NULL,
  ponto_inicio TIMESTAMP NOT NULL,
  ponto_fim TIMESTAMP,
  ponto_is_fechado BOOL DEFAULT false,
  PRIMARY KEY(ponto_id),
  FOREIGN KEY(ponto_user) REFERENCES i_colab (colab_id)
);

INSERT INTO i_colab (colab_nome, colab_email, colab_senha, colab_supervisor)
	VALUES ('Admin', 'admin@123.com', 'admin@123', True);
