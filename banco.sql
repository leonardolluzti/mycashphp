-- PostgreSQL
CREATE DATABASE mycash
    WITH 
    OWNER = postgres
    TEMPLATE = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'pt_BR.UTF-8'
    LC_CTYPE = 'pt_BR.UTF-8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

CREATE TABLE receitas(
  id serial NOT NULL,
  valor varchar(255) DEFAULT NULL,
  tipo varchar(10) DEFAULT NULL,
  data varchar(10) DEFAULT NULL,
  descricao varchar(10) DEFAULT NULL,
  fixo boolean NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE despesas(
  id serial NOT NULL,
  valor varchar(255) DEFAULT NULL,
  tipo varchar(10)DEFAULT NULL,
  data varchar(10) DEFAULT NULL,
  descricao varchar(10) DEFAULT NULL,
  fixo boolean NOT NULL,
  PRIMARY KEY(id)
);