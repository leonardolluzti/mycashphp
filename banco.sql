-- PostgreSQL
CREATE DATABASE mycash
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Portuguese_Brazil.1252'
       LC_CTYPE = 'Portuguese_Brazil.1252'
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