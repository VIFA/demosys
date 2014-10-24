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
  CONSTRAINT neighborhoods_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE neighborhoods
  OWNER TO postgres;


CREATE TABLE blocks
(
  id serial NOT NULL,
  name character varying NOT NULL,
  neighborhood_id integer NOT NULL,
  group_id integer,
  created time without time zone,
  modified time without time zone,
  user_id integer,
  CONSTRAINT blocks_pkey PRIMARY KEY (id),
  CONSTRAINT blocks_fkey_groups FOREIGN KEY (group_id)
      REFERENCES groups (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT blocks_fkey_neighborhoods FOREIGN KEY (neighborhood_id)
      REFERENCES neighborhoods (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT blocks_user_id FOREIGN KEY (user_id)
      REFERENCES users (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE blocks
  OWNER TO postgres;

-- Index: fki_blocks_fkey_groups

-- DROP INDEX fki_blocks_fkey_groups;

CREATE INDEX fki_blocks_fkey_groups
  ON blocks
  USING btree
  (group_id);

-- Index: fki_blocks_fkey_neighborhoods

-- DROP INDEX fki_blocks_fkey_neighborhoods;

CREATE INDEX fki_blocks_fkey_neighborhoods
  ON blocks
  USING btree
  (neighborhood_id);

-- Index: fki_blocks_user_id

-- DROP INDEX fki_blocks_user_id;

CREATE INDEX fki_blocks_user_id
  ON blocks
  USING btree
  (user_id);



CREATE TABLE groups
(
  id serial NOT NULL,
  name character varying NOT NULL,
  user_id integer,
  created time without time zone,
  modified time without time zone,
  leader_id integer NOT NULL,
  people_id integer NOT NULL,
  CONSTRAINT groups_pkey PRIMARY KEY (id),
  CONSTRAINT groups_fkey_users FOREIGN KEY (user_id)
      REFERENCES users (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE groups
  OWNER TO postgres;

-- Index: fki_groups_fkey_users

-- DROP INDEX fki_groups_fkey_users;

CREATE INDEX fki_groups_fkey_users
  ON groups
  USING btree
  (user_id);