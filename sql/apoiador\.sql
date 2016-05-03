CREATE TABLE apoiador
(
  nome character varying,
  cnpj character varying,
  idade integer,
  id_apoio serial NOT NULL,
  CONSTRAINT apoiador_pkey PRIMARY KEY (id_apoio)
)