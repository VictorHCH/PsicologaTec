<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Psiconsultorio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../PsicologaTec/images/picono.png" rel="icon">
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
                <h1>Agregar Paciente<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Citas pendientes</a></li>

                    <li><a href="pacientes.php">Pacientes</a></li>
                    <li><a href="Add_Paciente.php">Agregar paciente</a></li>
                    <li><a href="Add_Cita.php">Agendar cita</a></li>
                    <li><a href="logoff.php">Cerrar Sesion</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <main id="main">
        <div class="container align-items-center ">
            <br>
            <div class="col-md-20">
                <form action="agregaPaciente.php" method="post">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Numero de control</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="control" placeholder="Numero de control" aria-label="Numero de control" aria-describedby="basic-addon2" maxlength="8" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Fecha de Ingreso</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="date" class="form-control" name="fecha" placeholder="Fecha" aria-label="Fecha" aria-describedby="basic-addon2" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre(s)</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre(s)" aria-label="Nombre(s)" aria-describedby="basic-addon2" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Apellidos</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="apellido" placeholder="Apellidos" aria-label="Apellidos" aria-describedby="basic-addon2" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">CURP</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="curp" placeholder="CURP" aria-label="CURP" aria-describedby="basic-addon2" maxlength="18" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Peso</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="number" class="form-control" name="peso" placeholder="Peso" aria-label="Peso" aria-describedby="basic-addon2"  required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Estatura</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="number" class="form-control" name="estatura" placeholder="Estatura" aria-label="Estatura   " aria-describedby="basic-addon2" maxlength="18" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tipo de sangre</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <div class="col-sm-9 ">
                                        <select class="mdb-select md-form text-secondary" style="border-radius:25px ;" name="sangre">
                                          <option value="" disabled selected>Tipo de sangre</option>
                                          <option value="1">A+</option>
                                          <option value="2">A-</option>
                                          <option value="3">B+</option>
                                          <option value="4">B-</option>
                                          <option value="5">AB+</option>
                                          <option value="6">AB-</option>
                                          <option value="7">O+</option>
                                          <option value="8">O-</option>
                                            
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Sexo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <div class="col-sm-9 ">
                                        <select class="mdb-select md-form text-secondary" style="border-radius:25px ;" name="sexo">
                                          <option value="" disabled selected>Sexo</option>
                                          <option value="1">Hombre</option>
                                          <option value="2">Mujer</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0 ">Edad</h6>
                                </div>
                                <div class="col-sm-9 text-secondary ">
                                    <input type="number " class="form-control " name="edad" placeholder="Edad " aria-label="Edad " aria-describedby="basic-addon2 " maxlength="2 " required>
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-12 ">
                                    <button class="btn btn-sm btn-primary w-100 ml-2 " style="background-color:#346e63;border:#f4f4f4; " type="submit ">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer " class="footer ">

        <div class="container ">
            <div class="row gy-4 ">
                <div class="col-lg-5 col-md-12 footer-info ">
                    <a href="index.php " class="logo d-flex align-items-center ">
                        <span>Agregar Paciente</span>
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