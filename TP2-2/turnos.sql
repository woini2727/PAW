CREATE TABLE ej8_turnos
(
  id_turno integer NOT NULL DEFAULT nextval('ej8_turnos_id_turno_seq'::regclass),
  titulo text,
  nombre text,
  email text,
  telefono text,
  edad integer,
  talle text,
  altura text,
  fecha date,
  pelo text,
  hora integer,
  minutos integer
);