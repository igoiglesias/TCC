-- Database: "RelatorioTempo"

-- DROP DATABASE "RelatorioTempo";

CREATE DATABASE "RelatorioTempo"
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'en_US.UTF-8'
       LC_CTYPE = 'en_US.UTF-8'
       CONNECTION LIMIT = -1;


-- Table: public.dados

-- DROP TABLE public.dados;

CREATE TABLE public.dados
(
  id integer NOT NULL DEFAULT nextval('dados_id_seq'::regclass),
  temperatura character varying(5),
  humidade character varying(5),
  orvalho character varying(5),
  luz character varying(4),
  latitude character varying(20),
  longitude character varying(20),
  dt_coleta timestamp without time zone,
  dt_cadastro timestamp without time zone NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT dados_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.dados
  OWNER TO postgres;


-- Table: public.usuarios

-- DROP TABLE public.usuarios;

CREATE TABLE public.usuarios
(
  id integer NOT NULL DEFAULT nextval('usuarios_id_seq'::regclass),
  usuario character varying(50) NOT NULL,
  senha character varying(50) NOT NULL,
  email character varying(255) NOT NULL,
  img character varying(255) DEFAULT 'img/default.png'::character varying,
  dt_criacao timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT usuarios_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.usuarios
  OWNER TO postgres;
