CREATE TABLE people
(
  id serial NOT NULL,
  block_id integer NOT NULL,
  "table" character varying,
  "order" character varying,
  talon character varying,
  ticket character varying,
  insciption_date time without time zone,
  document_number character varying,
  name character varying,
  last_name character varying,
  sex character(1),
  nationality character varying,
  born_date time without time zone,
  address character varying,
  part character varying,
  acronym character varying,
  minor boolean,
  lot character varying,
  commission character varying,
  CONSTRAINT people_pkey PRIMARY KEY (id),
  CONSTRAINT people_fkey_blocks FOREIGN KEY (block_id)
      REFERENCES blocks (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE people
  OWNER TO postgres;



CREATE TABLE standards
(
  document_id character varying,
  name character varying,
  last_name character varying,
  address character varying,
  district character varying,
  leader character varying,
  leader_neighborhood character varying,
  local character varying,
  block_id character varying,
  neighborhood_id character varying,
  local_id character varying,
  "table" character varying,
  "order" character varying,
  sex character varying,
  born_date character varying,
  match character varying,
  pad2013 character varying,
  date character varying,
  "time" character varying,
  local_number character varying,
  nacionality character varying,
  age character varying,
  comission character varying,
  zone character varying
)
WITH (
  OIDS=FALSE
);
ALTER TABLE standards
  OWNER TO postgres;
