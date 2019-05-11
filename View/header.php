<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Página Principal</title>
        <link href="Assets/css/widgetSocial.css" rel="stylesheet">
        <link href="Assets/css/fontawesome-all.css" rel="stylesheet">
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="Assets/css/font.css" rel="stylesheet">
        <link href="Assets/css/home.css" rel="stylesheet">
        <link href="Assets/css/estiloFooter.css" rel="stylesheet">
        <link href="Assets/css/StylesFCS.css" rel="stylesheet">
        <script src="Assets/js/fontawesome-all.js" type="text/javascript"></script>
        <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
    </head>

    <body style="color: #193155">
        <nav class="navbar navbar-expand-lg" id="contTitleClinica">
            <a class="navbar-brand" id="titleClinica" href="index.php?c=Home" ><i class="fas fa-heartbeat"></i> Celulares Liberia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                    if(isset($_SESSION['Iniciada'])){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?c=Cita">Citas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?c=Recetas">Recetas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?c=Tratamiento">Tratamientos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?c=Canalizacion">Canalización</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?c=Antecedentes">Antecedentes</a>
                        </div>
                    </li>
                    <?php }?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="titleContactanos" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contáctanos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?c=Contactanos">Contáctanos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?c=MVision">Misión y visión</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active">
                        <a class="nav-link" id="titleRegistrar" href="index.php?c=Usuario&a=Registrar"><i class="fas fa-user-md"></i> Regístrate<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" id="titleSesion" href="index.php?c=Login&a=Autenticar"><i class="fas fa-sign-in-alt"></i> <?php echo isset($_SESSION['Iniciada']) ? 'Cerrar Sesion' : 'Iniciar Sesion';?><span class="sr-only">(current)</span></a>
                    </li>

                </ul>
            </div>
        </nav>
