<?php require('includes/valida.php') ?>
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
                <h1>Psiconsultorio<span>.</span></h1>
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

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Citas Pendientes</h2>
                    <p>Bienvenida a tu pagina de confianza, checa tus consultas en el boton <b>Iniciar</b></p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#si" class="btn-get-started">Iniciar</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-book"></i></div>
                            <h4 class="title"><a href="index.php" class="stretched-link">Citas pendientes</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-file-earmark-person"></i></div>
                            <h4 class="title"><a href="pacientes.php" class="stretched-link">Pacientes</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-journal-plus"></i></div>
                            <h4 class="title"><a href="Add_Cita.php" class="stretched-link">Agregar Citas</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                            <h4 class="title">
                                <a href="Add_Paciente.php" class="stretched-link">Agregar pacientes</a>
                            </h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                </div>
            </div>
        </div>
        <div id="si" style="background-color:white ;"><br><br><br></div>
        </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main>

        <div class="container ">
            <!--  -->
            <?php
                        //Se hace la conexion con la BD
                        include("conexion.php");
                        //Validacion de usuario y contrase??a
                        $fecha = date("Y")."/".date("m")."/".date("d")-1;
                        $consulta = "SELECT p.nombres, p.apellidos, p.noControl, c.hora, c.tipoCita, c.fecha FROM pacientes as p 
                        INNER JOIN citas as c ON c.noControl = p.noControl WHERE fecha = '$fecha'";
                        $query = mysqli_query($conexion, $consulta);
                        $resultado = mysqli_num_rows($query);
                        //Si se encontro el usuario entra al index
                        if($resultado){ 
                            while($data = mysqli_fetch_array($query)){
                                $nombre = $data['nombres'];
                                $apellido = $data['apellidos'];
                                $control= $data['noControl'];
                                $tipoCita = $data['tipoCita'];
                                $hora = $data['hora'];
                            ?>
                            <div class="card p-3 " style="background-color:#18bc9c ">
                                <div class="ml-3 w-70 ">
                                    <h4 class="mb-0 mt-0 " style="color:#ffffff ">Tipo de Cita</h4> <span style="color:#ffffff "><?php echo $tipoCita?></span>
                                    <div class="p-2 mt-2 d-flex justify-content-between rounded text-white stats " style="background-color:#ffffff ">
                                        <div class="d-flex flex-column " style="color:#000000 "> <span class="articles "><b>Paciente:</b></span> <span class="number1 "><?php echo $nombre?></span><span class="number1 "><?php echo $apellido?></span> </div>
                                        <div class="d-flex flex-column " style="color:#000000 "> <span class="rating "><b>Fecha:</b></span> <span class="number3 "><?php echo (date("d")-1)."/".date("m")."/".date("Y")?></span> </div>
                                        <div class="d-flex flex-column " style="color:#000000 "> <span class="followers "><b>Hora:</b></span> <span class="number2 "><?php echo $hora?></span> </div>
                                        <div class="d-flex flex-column " style="color:#000000 "> <span class="rating "><b>Numero de control:</b></span> <span class="number3 "><?php echo $control?></span> </div>
                                    </div>
                                    <a href="perfil.php?id=<?php echo $control?>">
                                        <div class="button mt-2 d-flex flex-row align-items-center ">
                                            <button class="btn btn-sm btn-primary w-100 ml-2 " style="background-color:#116554;border:#f4f4f4; " type="submit">Entrar</button>
                                            <!-- En este boton quien que al picarle entre a al perfil de la persona correspondiente , similar que al boron de paciente -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <?php
                            }
                        }
                    ?>    

            <!--  -->
        </div>
        <div class="container ">
            <form action="Add_Cita.php">
                <button class="btn btn-sm btn-primary w-100 h-100 p-3 mt-2 " style="background-color:#116554;border:#f4f4f4; " type="submit ">Nueva Cita</button>
                <br><br>
            </form>

        </div>
        <!-- for card end-->


    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer " class="footer ">

        <div class="container ">
            <div class="row gy-4 ">
                <div class="col-lg-5 col-md-12 footer-info ">
                    <a href="index.php " class="logo d-flex align-items-center ">
                        <span>Citas pendientes</span>
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