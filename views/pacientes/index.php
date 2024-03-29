<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Militar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css">
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
        <center><h1 id="titulo">Registro de Pacientes</h1><br></center>

        <form class="form-container" id="formularioPersonal" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-12">
                    <div class="form-row" id="InputCatalogo">
                        <div class="form-group col-md-6">
                            <label for="catalogo"><i class="fas fa-search"></i> Buscar Paciente para Actualizar
                                Datos:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="catalogo" name="catalogo">
                                <div class="input-group-append">
                                    <button type="button" id="btnBuscar" class="btn btn-outline-success">
                                        <i class="fas fa-search"></i> Buscar
                                    </button>
                                    <button type="reset" id="btnLimpiar" class="btn btn-outline-primary">
                                        <i class="fas fa-eraser"></i> Borrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="asp_nom1"><i class="fas fa-user-tie"></i> Nombres:</label>
                            <input type="text" class="form-control" id="asp_nom1" name="asp_nom1"
                                placeholder="Primer Nombre" oninput="this.value = this.value.toUpperCase()">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="asp_nom2"><i class="fas fa-user"></i></label>
                            <input type="text" class="form-control" id="asp_nom2" name="asp_nom2"
                                placeholder="Segundo Nombre" oninput="this.value = this.value.toUpperCase()">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="asp_ape1"><i class="fas fa-user-tie"></i> Apellidos:</label>
                            <input type="text" class="form-control" id="asp_ape1" name="asp_ape1"
                                placeholder="Primer Apellido" oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="asp_ape2"><i class="fas fa-user"></i></label>
                            <input type="text" class="form-control" id="asp_ape2" name="asp_ape2"
                                placeholder="Segundo Apellido" oninput="this.value = this.value.toUpperCase()">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="asp_genero"><i class="fas fa-venus-mars"></i> Género:</label>
                            <select class="form-control" id="asp_genero" name="asp_genero">
                                <option value="" disabled selected>Seleccione un Género</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="asp_dpi"><i class="fas fa-id-card"></i> DPI:</label>
                            <input type="text" class="form-control" id="asp_dpi" name="asp_dpi" placeholder="DPI"
                                maxlength="13">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="asp_dpi"><i class="fa fa-calendar"></i> Edad:</label>
                            <input type="number" class="form-control" id="asp_dpi" name="asp_dpi" placeholder="Edad">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="direccion"><i class="fa fa-location-arrow"></i> Dirección:</label>
                            <textarea class="form-control" id="direccion" name="direccion"
                                placeholder="Dirección"></textarea>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="asp_dpi"><i class="fa fa-phone"></i> Telefono No.1:</label>
                            <input type="number" class="form-control" id="asp_dpi" name="asp_dpi"
                                placeholder="Telefono">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="asp_dpi"><i class="fa fa-phone"></i> Telefono No.2:</label>
                            <input type="number" class="form-control" id="asp_dpi" name="asp_dpi"
                                placeholder="Telefono">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="antecedentes_personales"><i class="fas fa-file-alt"></i> Antecedentes
                                Personales:</label>
                            <textarea class="form-control" id="antecedentes_personales" name="antecedentes_personales"
                                placeholder="Antecedentes Personales"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="antecedentes_familiares"><i class="fas fa-file-alt"></i> Antecedentes
                                Familiares:</label>
                            <textarea class="form-control" id="antecedentes_familiares" name="antecedentes_familiares"
                                placeholder="Antecedentes Familiares"></textarea>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="motivo_consulta"><i class="fas fa-comment-medical"></i> Motivo de la
                                Consulta:</label>
                            <textarea class="form-control" id="motivo_consulta" name="motivo_consulta"
                                placeholder="Motivo de Consulta"></textarea>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="medicamentos_consumidos"><i class="fas fa-pills"></i> Medicamentos que
                                consume:</label>
                            <textarea class="form-control" id="medicamentos_consumidos" name="medicamentos_consumidos"
                                placeholder="Medicamentos que consume"></textarea>
                        </div>


                        <div id="contenedorDocumentos" class="col-lg-12">
                            <!-- Aquí se insertarán dinámicamente los campos -->
                        </div>

                        <div class="col-6 mx-auto" style="margin-top: 12px">
                            <button type="button" id="btnGuardar" class="btn btn-primary w-100">
                                <i class="fas fa-save"></i> Guardar Paciente
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>
    <script src="<?= asset('./build/js/pacientes/index.js') ?>"></script>

</body>

</html>