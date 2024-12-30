



--//!Tabla donde se almacenara todos los PX.
CREATE TABLE pacientes (
    pac_id SERIAL PRIMARY KEY,
    pac_nom1 VARCHAR(20),
    pac_nom2 VARCHAR(20),
    pac_ape1 VARCHAR(20),
    pac_ape2 VARCHAR(20),
    pac_genero INT,
    pac_edad SMALLINT,
    pac_direccion VARCHAR(75),
    pac_tel1 INT,
    pac_tel2 INT,
    pac_ant_per CHAR(300),
    pac_ant_fam CHAR(300),
    pac_consu_medica CHAR(200),
    pac_situacion SMALLINT
);

go
CREATE TABLE tratamientos (
    trat_id SERIAL PRIMARY KEY,
    trat_nombre CHAR(100) NOT NULL,
    trat_precio INT NOT NULL,
    trat_situacion SMALLINT
);
go
CREATE TABLE fichas_odonto (
    fich_id SERIAL PRIMARY KEY,
    fich_paciente INT NOT NULL,
    fich_fecha DATE,
    fich_mot_cons CHAR(300),  --//!motivo de la consulta
    fich_tratamiento INT NOT NULL,
    fich_costo INT,
    fich_abono INT,
    fich_saldo INT,
    fich_pieza INT,
    fich_situacion SMALLINT,
    FOREIGN KEY (fich_paciente) REFERENCES pacientes(pac_id),
    FOREIGN KEY (fich_tratamiento) REFERENCES tratamientos(trat_id)
);

--//!DROPS
DROP TABLE pacientes
go
DROP TABLE tratamientos
go
DROP TABLE fichas_odonto


--//!QUERYS
--//?Mandar a buscar a pacientes
SELECT 
    pac_nom1 || ' ' || NVL(pac_nom2, '') || ' ' || pac_ape1 || ' ' || NVL(pac_ape2, '') AS nombre_completo,
    pac_genero, 
    pac_edad, 
    pac_direccion, 
    pac_tel1, 
    pac_tel2, 
    pac_ant_per,
    pac_ant_fam, 
    pac_consu_medica
FROM 
    pacientes
WHERE 
    pac_situacion = 1;