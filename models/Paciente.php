<?php

namespace Model;

class Paciente extends ActiveRecord{
    protected static $tabla = 'pacientes';
    protected static $columnasDB = ['pac_nom1','pac_nom2','pac_ape1','pac_ape2','pac_edad','pac_tel1','pac_tel2','pac_genero','pac_direccion','pac_ant_per','pac_ant_fam','pac_consu_medica','pac_situacion'];
    protected static $idTabla = 'pac_id';

    public $pac_id;
    public $pac_nom1;
    public $pac_nom2;
    public $pac_ape1;
    public $pac_ape2;
    public $pac_edad;
    public $pac_tel1;
    public $pac_tel2;
    public $pac_genero;
    public $pac_direccion;
    public $pac_ant_per;
    public $pac_ant_fam;
    public $pac_consu_medica;
    public $pac_situacion;

    public function __construct($args = [])
    {
        $this->pac_id = $args['pac_id'] ?? null;
        $this->pac_nom1 = $args['pac_nom1'] ?? '';
        $this->pac_nom2 = $args['pac_nom2'] ?? '';
        $this->pac_ape1 = $args['pac_ape1'] ?? '';
        $this->pac_ape2 = $args['pac_ape2'] ?? '';
        $this->pac_edad = $args['pac_edad'] ?? '';
        $this->pac_tel1 = $args['pac_tel1'] ?? '';
        $this->pac_tel2 = $args['pac_tel2'] ?? '';
        $this->pac_genero = $args['pac_genero'] ?? '';
        $this->pac_direccion = $args['pac_direccion'] ?? '';
        $this->pac_ant_per = $args['pac_ant_per'] ?? '';
        $this->pac_ant_fam = $args['pac_ant_fam'] ?? '';
        $this->pac_consu_medica = $args['pac_consu_medica'] ?? '';
        $this->pac_situacion = $args['pac_situacion'] ?? '1';
    }
}
