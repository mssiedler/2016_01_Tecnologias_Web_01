CREATE TABLE despesas
(
  descricao character varying,
  valor numeric(8,2),
  localdogasto character varying,
  id_despesas serial NOT NULL,
  CONSTRAINT despesas_pkey PRIMARY KEY (id_despesas)
)