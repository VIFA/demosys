CREATE DATABASE demosys
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Spanish_Argentina.1252'
       LC_CTYPE = 'Spanish_Argentina.1252'
       CONNECTION LIMIT = -1;


CREATE TABLE users
(
  name character varying NOT NULL,
  last_name character varying NOT NULL,
  created time without time zone,
  modified time without time zone,
  role character varying NOT NULL,
  user_id integer,
  username character varying NOT NULL,
  email character varying,
  password character varying NOT NULL,
  phone character varying,
  id serial NOT NULL,
  CONSTRAINT users_pk PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE users
  OWNER TO postgres;


CREATE TABLE neighborhoods
(
  id serial NOT NULL,
  zone character varying NOT NULL,
  area character varying,
  district_id integer,
  departament integer,
  name character varying,
  leader_id integer,
  CONSTRAINT neighborhoods_pkey PRIMARY KEY (zone)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE neighborhoods
  OWNER TO postgres;