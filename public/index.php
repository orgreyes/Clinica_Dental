<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\PacienteController;


$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class,'index']);


//!Rutas para Asignar Grados A los Puestos
$router->get('/pacientes', [PacienteController::class,'index']);
$router->get('/API/pacientes/buscar', [PacienteController::class,'buscarAPI']);
$router->get('/API/pacientes/buscarGradosPuestos', [PacienteController::class,'buscarGradosPuestosAPI']);
$router->post('/API/pacientes/eliminar', [PacienteController::class,'eliminarAPI']);
$router->post('/API/pacientes/modificar', [PacienteController::class,'modificarAPI']);
$router->post('/API/pacientes/guardar', [PacienteController::class,'guardarAPI']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
