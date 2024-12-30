<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="build/js/app.js"></script>
    <link rel="shortcut icon" href="<?= asset('images/clinica.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= asset('build/styles.css') ?>">
    <title>Clinica Dental Arévalo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/ejemplo/">
                <img src="<?= asset('./images/clinica2.png') ?>" width="35px'" alt="cit">
                Aplicaciones
            </a>
            <div class="collapse navbar-collapse" id="navbarToggler">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/Clinica_Dental/"><i
                                class="bi bi-house-fill me-2"></i>Inicio</a>
                    </li>

                    <li>
                        <a class="dropdown-item nav-link text-white" href="/Clinica_Dental/pacientes">
                            <i class="ms-lg-0 ms-2 bi bi-person me-2"></i>Registro de Pacientes
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item nav-link text-white" href="/Clinica_Dental/nueva">
                            <i class="ms-lg-0 ms-2 bi bi-file-medical me-2"></i>Fichas Médicas
                        </a>
                    </li>


                    <li>
                        <a class="dropdown-item nav-link text-white" href="/Clinica_Dental/nueva">
                            <i class="ms-lg-0 ms-2 bi bi-journal me-2"></i>Diario de visitas
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item nav-link text-white" href="/Clinica_Dental/nueva">
                            <i class="ms-lg-0 ms-2 fas fa-pills me-2"></i>Trataminetos
                        </a>
                    </li>

                </ul>
                <div class="col-lg-1 d-grid mb-lg-0 mb-2">
                    <!-- Ruta relativa desde el archivo donde se incluye menu.php -->
                    <a href="/menu/" class="btn btn-danger"><i class="bi bi-arrow-bar-left"></i>MENÚ</a>
                </div>


            </div>
        </div>

    </nav>
    <div class="progress fixed-bottom" style="height: 6px;">
        <div class="progress-bar progress-bar-animated bg-danger" id="bar" role="progressbar" aria-valuemin="0"
            aria-valuemax="100"></div>
    </div>
    <div class="container-fluid pt-5 mb-4" style="min-height: 85vh">

        <?php echo $contenido; ?>
    </div>
    <div class="container-fluid ">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <p style="font-size:xx-small; font-weight: bold;">
                    Clinica Dental Arévalo, <?= date('Y') ?> &copy;
                </p>
            </div>
        </div>
    </div>
</body>

</html>