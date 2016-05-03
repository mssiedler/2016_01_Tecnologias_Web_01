CREATE TABLE pergunta
(
  titulo character varying,
  dica character varying,
  niveldificuldade integer,
  id_etapa serial NOT NULL,
  CONSTRAINT pergunta_pkey PRIMARY KEY (id_etapa)
)