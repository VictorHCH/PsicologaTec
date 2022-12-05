<?php
    $control = filter_input(1, 'id');
    //Se hace la conexion con la BD
    include("conexion.php");
    //Validacion de usuario y contraseña

    $consulta = "SELECT * FROM pacientes WHERE noControl='$control'";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if($resultado){ 
        while($data = mysqli_fetch_array($query)){
            $nombre = $data['nombres'];
            $apellido = $data['apellidos'];
            $peso = $data['peso'];
            $estatura = $data['estatura_cm'];
            $edad = $data['edad'];
            $fecha = date("d/m/Y", strtotime($data['fecha_ingreso']));
            $curp = $data['curp'];
            $sangre = $data['sangre'];
            $sexo = $data['sexo'];
            if($sexo == 1){
                $sexo = "H";
            }
            else{
                $sexo = "M";
            }
        }
    }
    $consulta = "SELECT tipo FROM sangre WHERE id_sangre='$sangre'";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if($resultado){ 
        while($data = mysqli_fetch_array($query)){
            $sangre = $data['tipo'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Impact Bootstrap Template - Blog</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
    
    </section>
    <!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Perfil<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Citas pendientes</a></li>

                    <li><a href="pacientes.php">Pacientes</a></li>
                    <li><a href="Add_Paciente.php">Agregar paciente</a></li>
                    <li><a href="Add_Cita.php">Agendar cita</a></li>
                    <li><a href="#contact">Cerrar Sesion</a></li>
                </ul>
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <main id="main">
        <div class="container">
            <div class="main-body">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                    </ol>
                </nav>
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">

                                        <h4>
                                            <span><?php echo $nombre ?></span>&nbsp<span><?php echo $apellido ?></span>
                                        </h4>
                                        <p class="text-secondary mb-1"><b>Numero de control</b></p>
                                        <p class="text-muted font-size-sm"><?php echo $control ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">CURP</h6>
                                    <span class="text-secondary"><?php echo $curp ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Peso</h6>
                                    <span class="text-secondary"><?php echo $peso ?> kg.</span></li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Estatura</h6>
                                    <span class="text-secondary"><?php echo $estatura ?> cm.</span> </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Fecha de Ingreso</h6>
                                    <span class="text-secondary"><?php echo $fecha ?></span></li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Tipo de sangre</h6>
                                    <span class="text-secondary"><?php echo $sangre ?></span></li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Sexo</h6>
                                    <span class="text-secondary"><?php echo $sexo ?></span></li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Edad</h6>
                                    <span class="text-secondary"><?php echo $edad ?></span></li>
                            </ul>
                        </div>
                        <div class="card mt-3 justify-content-center">
                            <form action="agregarNota.php?id=<?php echo $control ?>" method="post">
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <textarea class="form-control" name="nota" id="form4Example3" rows="4"></textarea>
                                    <label class="mb-0" for="form4Example3">Anotaciones</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-sm btn-primary w-100 ml-2" style="background-color:#346e63;border:#f4f4f4; ">
                                  Añadir
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <div class="card mb-5">
                            <!--  -->
                            <form action="agregarCita.php?id=<?php echo $control ?>" method="post">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Fecha</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="date" name="fechaC" class="form-control" placeholder="Fecha" aria-label="Fecha" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Hora</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="time" class="form-control" name="horaC" placeholder="Hora" aria-label="Hora" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Tipo de consulta</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="tipoC" placeholder="Tipo de consulta" aria-label="Tipo de consulta" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Estado del paciente</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="estado" placeholder="Estado" aria-label="Estado" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Titulo del diagnostico</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="diagnosticoT" placeholder="Titulo del diagnostico" aria-label="Titulo del diagnostico" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Informacion del diagnostico</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea class="form-control" rows="4"  name="diagnosticoI" placeholder="Informacion del diagnostico"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input class="btn btn-sm btn-primary w-100 ml-2 " style="background-color:#346e63;border:#f4f4f4; "  value="Listo" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--  -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container " name="Datos " style="background-color: #18bc9c;border-radius:20px; ">
            <br>
            <div class="main-body ">

                <h2 class=" " style="color:#ffffff ">Historial</h2>
                <div class="row gutters-sm ">
                    <div class="col-md-8 ">    <!--  -->
                        <?php
                        //Se hace la conexion con la BD
                        include("conexion.php");
                        //Validacion de usuario y contraseña

                        $consulta = "SELECT * FROM consulta WHERE noControl='$control'";
                        $query = mysqli_query($conexion, $consulta);
                        $resultado = mysqli_num_rows($query);
                        //Si se encontro el usuario entra al index
                        if($resultado){ 
                            $i = 0;
                            while($data = mysqli_fetch_array($query)){
                                $i = $i + 1;
                                $fechaC = date("d/m/Y", strtotime($data['fecha_cita']));
                                $horaC = $data['hora_cita'];
                                $estado = $data['estado'];
                                $tipoC = $data['tipo_consulta'];
                                $diagnosticoT = $data['diagnostico_titulo'];
                                $diagnosticoI = $data['diagnostico_info'];
                            ?>
                            <div class="card p-3 " style="background-color:#ffffff ">
                                <div class="ml-3 w-70 ">
                                    <h6 class="mb-0 "><b>Consultas&nbsp<?php echo $i?></b></h6>
                                    <br>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Fecha</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <span class="text-secondary"><?php echo $fechaC?></span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Hora</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <span class="text-secondary"><?php echo $horaC;?></span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Tipo de consulta</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <span class="text-secondary"><?php echo $tipoC?></span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Estado del paciente</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <span class="text-secondary"><?php echo $estado?></span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Titulo del diagnostico</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <span class="text-secondary"><?php echo $diagnosticoT?></span> </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Informacion del diagnostico</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <span class="text-secondary"><?php echo $diagnosticoI?></span> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                    <br> 
                            <?php
                            }
                        }
                    ?> 
                        <br>

                        <!--  -->
                    </div>

                    <div class="col-md-4 mb-3 ">
                    <?php
                        //Se hace la conexion con la BD
                        include("conexion.php");
                        //Validacion de usuario y contraseña

                        $consulta = "SELECT * FROM anotaciones WHERE noControl='$control'";
                        $query = mysqli_query($conexion, $consulta);
                        $resultado = mysqli_num_rows($query);
                        //Si se encontro el usuario entra al index
                        if($resultado){ 
                            $j = 0;
                            while($data = mysqli_fetch_array($query)){
                                $j = $j + 1;
                                $fechaN = date("d/m/Y", strtotime($data['fechaN']));
                                $nota = $data['anotacion']; 
                            ?>
                             <div class="card mt-3 ">
                                <ul class="list-group list-group-flush ">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">
                                        <h6 class="mb-0 ">Anotacion&nbsp<?php echo $j?></h6>
                                        <h5 class="text-secondary ">Fecha&nbsp<?php echo $fechaN?></h5>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">
                                        <span class="text-secondary "><?php echo $nota?></span>
                                    </li>

                                </ul>
                            </div>
                            <div>
                                <p>&nbsp</p>
                            </div>
                            <?php
                            }
                        }
                    ?>                 <!--  -->
        
                        <br>
                        <!--  -->
                    </div>


                    <br>
                    <!--  -->


                </div>
            </div>

        </div>
        <br>
        </div>

        <br>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer " class="footer ">

        <div class="container ">
            <div class="row gy-4 ">
                <div class="col-lg-5 col-md-12 footer-info ">
                    <a href="index.php " class="logo d-flex align-items-center ">
                        <span>Perfil</span>
                    </a>
                
                    <div class="social-links d-flex mt-4 ">
                        
                        <a href="https://www.facebook.com/ITParraloficial" class="facebook "><i class="bi bi-facebook "></i></a>
                        
                    </div>
                </div>

               

            </div>
        </div>

        <div class="container mt-4 ">
            <div class="copyright ">
                &copy; Copyright <strong><span>Psiconsultorio</span></strong>. Todos los Derechos Reservados.
            </div>
            <div class="credits ">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
                Designed by Ivan Acosta y Victor Covarrubias</a>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a href="# " class="scroll-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <div id="preloader "></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/vendor/aos/aos.js "></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js "></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js "></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js "></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
    <script src="assets/vendor/php-email-form/validate.js "></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js "></script>

</body>

</html>

</html>