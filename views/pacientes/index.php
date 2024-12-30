<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Militar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    #containerBtn {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    #containerBtnRegresar {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        margin-top: 10px;
    }

    img {
        border: 2px solid #ccc;
        max-width: 100%;
        height: auto;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .form-container {
        border: 1px solid #ccc;
        padding: 20px;
        background-color: #f9f9f9;
    }

    .form-container .form-group {
        margin-bottom: 20px;
    }

    .form-container label {
        font-weight: bold;
    }

    .form-container .name-input-group {
        display: flex;
    }
    </style>
</head>

<body>


    <div id="formulario" class="container mt-4">
        <center>
            <h1 id="titulo">Registro de Pacientes</h1><br>
        </center>

        <form class="form-container" id="formularioPersonal" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-12">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pac_nom1"><i class="fas fa-user-tie"></i> Nombres:</label>
                            <input type="text" class="form-control" id="pac_nom1" name="pac_nom1"
                                placeholder="Primer Nombre" oninput="this.value = this.value.toUpperCase()">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pac_nom2"><i class="fas fa-user"></i></label>
                            <input type="text" class="form-control" id="pac_nom2" name="pac_nom2"
                                placeholder="Segundo Nombre (OPCIONAL)" oninput="this.value = this.value.toUpperCase()">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pac_ape1"><i class="fas fa-user-tie"></i> Apellidos:</label>
                            <input type="text" class="form-control" id="pac_ape1" name="pac_ape1"
                                placeholder="Primer Apellido" oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pac_ape2"><i class="fas fa-user"></i></label>
                            <input type="text" class="form-control" id="pac_ape2" name="pac_ape2"
                                placeholder="Segundo Apellido (OPCIONAL)"
                                oninput="this.value = this.value.toUpperCase()">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pac_genero"><i class="fas fa-venus-mars"></i> Género:</label>
                            <select class="form-control" id="pac_genero" name="pac_genero">
                                <option value="" disabled selected>Seleccione un Género</option>
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pac_edad"><i class="fa fa-calendar"></i> Edad:</label>
                            <input type="number" class="form-control" id="pac_edad" name="pac_edad" placeholder="Edad"
                                min="1" max="99">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="pac_direccion"><i class="fa fa-location-arrow"></i> Dirección:</label>
                            <textarea class="form-control" id="pac_direccion" name="pac_direccion" type="text"
                                placeholder="Dirección (OPCIONAL)"></textarea>
                        </div>

                        <!-- El colocar el maxlength solo funciona con text, con number es un relajo, así
                         que asi le dejaremos por el momento. -->
                        <div class="form-group col-md-6">
                            <label for="pac_tel1"><i class="fa fa-phone"></i> Telefono No.1:</label>
                            <input type="number" class="form-control" id="pac_tel1" name="pac_tel1"
                                placeholder="Telefono" maxlength="8">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="pac_tel2"><i class="fa fa-phone"></i> Telefono No.2:</label>
                            <input type="number" class="form-control" id="pac_tel2" name="pac_tel2"
                                placeholder="Telefono (OPCIONAL)">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pac_ant_per"><i class="fas fa-file-alt"></i> Antecedentes
                                Personales:</label>
                            <textarea type="text" class="form-control" id="pac_ant_per" name="pac_ant_per"
                                placeholder="Antecedentes Personales (OPCIONAL)"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pac_ant_per"><i class="fas fa-file-alt"></i> Antecedentes
                                Familiares:</label>
                            <textarea type="text" class="form-control" id="pac_ant_per" name="pac_ant_per"
                                placeholder="Antecedentes Familiares (OPCIONAL)"></textarea>
                        </div>

                        <!-- Último campo de entrada -->
                        <div class="form-group col-md-6">
                            <label for="pac_consu_medica"><i class="fas fa-pills"></i> Medicamentos que consume:</label>
                            <textarea type="text" class="form-control" id="pac_consu_medica" name="pac_consu_medica"
                                placeholder="Medicamentos que consume (OPCIONAL)"></textarea>
                        </div>

                        <!-- Columna vacía para centrar el botón de guardar -->
                        <div class="col-md-6 offset-md-3">
                            <!-- Botón de guardar -->
                            <button type="submit" id="btnGuardar" class="btn btn-primary w-100">
                                <i class="fas fa-save"></i> Guardar Paciente
                            </button>
                        </div>
                    </div>

                </div>

            </div>
    </div>
    </form>
    <br><br>

    <!-- //!DATATABLE -->
    <div id="tablaPacienteContainer" class="container mt-1">
        <div class="row justify-content-center mt-4">
            <div class="col-12 p-4 shadow">
                <div class="text-center">
                    <h1>LISTADO DE PACIENTES</h1>
                </div>
                <table id="tablaPaciente" class="table table-bordered table-hover">
                    <!-- Contenido de la tabla -->
                </table>
            </div>
        </div>
    </div>
    </div>


    <!-- Aca se debe de ver mas detalles de la persona. -->
    <!-- //!Modal -->
    <div class="modal fade" id="modalDetalles" tabindex="-1" role="dialog" aria-labelledby="modalDetallesLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title " id="modalDetallesLabel">INFORMACION PERSONAL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div id="formulario" class="container mt-4">
                    <form class="form-container" id="formularioPersonal" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3">
                                <img for="asp_catalogo" id="foto" src="./images/foto.jpg" alt="Fotografía">
                            </div>
                            <div class="col-md-9">

                                <div class="form-row" id="InputCatalogo">
                                    <div class="form-group col-md-6">
                                        <label for="asp_catalogo"><i class="fas fa-id-card"></i> Catalogo</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" disabled id="asp_catalogo"
                                                name="asp_catalogo">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="asp_nom1"><i class="fas fa-user-tie"></i> Nombres:</label>
                                        <input type="text" class="form-control" disabled id="asp_nom1" name="asp_nom1"
                                            placeholder="Primer Nombre">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="asp_nom2"><i class="fas fa-user"></i></label>
                                        <input type="text" class="form-control" disabled id="asp_nom2" name="asp_nom2"
                                            placeholder="Segundo Nombre">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="asp_ape1"><i class="fas fa-user-tie"></i> Apellidos:</label>
                                        <input type="text" class="form-control" disabled id="asp_ape1" name="asp_ape1"
                                            placeholder="Primer Apellido">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="asp_ape2"><i class="fas fa-user"></i></label>
                                        <input type="text" class="form-control" id="asp_ape2" name="asp_ape2" disabled
                                            placeholder="Segundo Apellido">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="asp_genero"><i class="fas fa-venus-mars"></i>Genero:</label>
                                        <input type="text" class="form-control" id="asp_genero" disabled
                                            name="asp_genero" placeholder="Genero">
                                    </div>


                                    <!--//!------------------------->
                                    <div class="form-group col-md-6">
                                        <label for="per_grado"><i class="fas fa-shield"></i> Grado:</label>
                                        <input type="text" class="form-control" id="per_grado" disabled name="per_grado"
                                            placeholder="Grado">
                                    </div>




                                    <div class="form-group col-md-6">
                                        <label for="asp_puesto"><i class="fas fa-id-shield"></i>Puesto:</label>
                                        <input type="text" class="form-control" id="asp_puesto" disabled
                                            name="asp_puesto" placeholder="PUESTO">
                                    </div>



                                </div>

                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="buttonAnterior"
                        data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="<?= asset('./build/js/pacientes/index.js')  ?>"></script>

</html>