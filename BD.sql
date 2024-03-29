CREATE TABLE generos (
    gen_id SERIAL PRIMARY KEY,
    gen_nombre CHAR(15) NOT NULL,
    gen_situacion SMALLINT
);

CREATE TABLE pacientes (
    pac_id SERIAL PRIMARY KEY,
    pac_nom1 CHAR(20) NOT NULL,
    pac_nom2 CHAR(20),
    pac_ape1 CHAR(20) NOT NULL,
    pac_ape2 CHAR(20),
    pac_edad SMALLINT,
    pac_tel1 INT,
    pac_tel2 INT,
    pac_dpi CHAR(13) NOT NULL UNIQUE,
    pac_genero INT NOT NULL,
    pac_direccion CHAR(75),
    pac_ant_per CHAR(300),
    pac_ant_fam CHAR(300),
    pac_mot_cons CHAR(300),
    pac_consu_medica CHAR(200),
    pac_situacion SMALLINT,
    FOREIGN KEY (pac_genero) REFERENCES generos (gen_id)
);

CREATE TABLE tratamientos (
    trat_id SERIAL PRIMARY KEY,
    trat_nombre CHAR(100) NOT NULL,
    trat_precio INT NOT NULL,
    trat_situacion SMALLINT
);

CREATE TABLE fichas_odonto (
    fich_id SERIAL PRIMARY KEY,
    fich_paciente INT NOT NULL,
    fich_fecha DATE,
    fich_tratamiento INT NOT NULL,
    fich_costo INT,
    fich_abono INT,
    fich_saldo INT,
    fich_pieza INT,
    fich_situacion SMALLINT,
    FOREIGN KEY (fich_paciente) REFERENCES pacientes(pac_id),
    FOREIGN KEY (fich_tratamiento) REFERENCES tratamientos(trat_id)
);



DROP TABLE generos
DROP TABLE pacientes
DROP TABLE tratamientos
DROP TABLE fichas_odonto