<?php

namespace Controllers;

use Exception;
use Model\Paciente;
use MVC\Router;

class PacienteController {

public static function index(Router $router){

        $pacientes = Paciente::all();

        $router->render('pacientes/index', []);
}


//!Funcion Guardar
public static function guardarAPI() {
    try {

    //     $sql = "SELECT * FROM pacientes";
    //     $consulta = Aprobado::fetchArray($sql);
    
    // echo json_encode([$_POST]);
    // exit; 
        $pacienteData = $_POST;
        $paciente = new Paciente($pacienteData);
        $resultado = $paciente->crear();
        
        if ($resultado['resultado'] == 1) {
            echo json_encode([
                'mensaje' => 'Datos del Paciente guardados correctamente',
                'codigo' => 1,
                'paciente' => $pacienteData
            ]);
        } else {
            echo json_encode([
                'mensaje' => 'No se pudo guardar los datos del paciente',
                'codigo' => 0
            ]);
        }
    } catch (Exception $e) {
        echo json_encode([
            'detalle' => $e->getMessage(),
            'mensaje' => 'El DPI que ingresó ya existe en la base de datos',
            'codigo' => 0
        ]);
    }
}





//!Funcion Buscar
public static function buscarAPI(){
    $sql = "SELECT * FROM pacientes WHERE pac_situacion = 1 ";
    
     $sql = "SELECT 
                pac_nom1 || ' ' || NVL(pac_nom2, '') || ' ' || pac_ape1 || ' ' || NVL(pac_ape2, '') AS nombre,
                pac_nom1,
                pac_nom2,
                pac_ape1,
                pac_ape2,
                pac_id,
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
                pac_situacion = 1
";

     try {

         $pacientes = Paciente::fetchArray($sql);

         echo json_encode($pacientes);
     } catch (Exception $e) {
         echo json_encode([
             'detalle' => $e->getMessage(),
             'mensaje' => 'Ocurrió un error',
             'codigo' => 0
         ]);
     }
}

//!Funcion Eliminar
public static function eliminarAPI(){
     try{
         $pac_id = $_POST['pac_id'];
        //   echo json_encode([$pac_id]);
        //  exit;
         $paciente = Paciente::find($pac_id);
         $paciente->pac_situacion = 0;
         $resultado = $paciente->actualizar();

         if($resultado['resultado'] == 1){
             echo json_encode([
                 'mensaje' => 'Datos de la Paciente Eliminados correctamente',
                 'codigo' => 1
             ]);
         }else{
             echo json_encode([
                 'mensaje' => 'Ocurrio un error',
                 'codigo' => 0
             ]);
         }
     }catch(Exception $e){
         echo json_encode([
             'detalle' => $e->getMessage(),
             'mensaje'=> 'Ocurrio un Error',
             'codigo' => 0
     ]);
     }
}

//!Funcion Modificar
public static function modificarAPI() {
     try {
         $pacienteData = $_POST;
 
         foreach ($pacienteData as $campo => $valor) {
             if (empty($valor)) {
                 echo json_encode([
                     'mensaje' => 'Llene Todos Los Campos',
                     'codigo' => 0
                 ]);
                 return;
             }
         }

         $pacienteData['mis_situacion'] = 1;
 
         $paciente = new Paciente($pacienteData);
         $resultado = $paciente->actualizar();
 
         if ($resultado['resultado'] == 1) {
             echo json_encode([
                 'mensaje' => 'Actualización de Datos Correcta',
                 'codigo' => 1
             ]);
         } else {
             echo json_encode([
                 'mensaje' => 'Ocurrió un error',
                 'codigo' => 0
             ]);
         }
     } catch (Exception $e) {
         echo json_encode([
             'detalle' => $e->getMessage(),
             'mensaje' => 'Ocurrió un Error',
             'codigo' => 0
         ]);
     }
}

}