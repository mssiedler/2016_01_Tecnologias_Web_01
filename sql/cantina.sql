CREATE TABLE cantina
(
  id serial NOT NULL,
  produto character varying(30),
  preco numeric(5,2),
  unidadesavenda integer,
  CONSTRAINT cantina_pkey PRIMARY KEY (id)
)