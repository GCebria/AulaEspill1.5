<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Creative - Start Bootstrap Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional fonts for this theme -->
        <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="assets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="assets/css/creative.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <!-- Temporary navbar container fix until Bootstrap 4 is patched -->
        <style>
            .navbar-toggler {
                z-index: 1;
            }

            @media (max-width: 576px) {
                nav > .container {
                    width: 100%;
                }
            }
        </style>

    </head>

    <?php session_start(); ?>

    <body id="page-top">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar fixed-top navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <a class="navbar-brand page-scroll" href="#page-top"  >Espill</a>
                <div class="collapse navbar-collapse" id="navbarExample">
                    <ul class="navbar-nav ml-auto">
                      <?php if(!isset($_SESSION['email'])){
			                  ?>
                        <li class="nav-item">
                          <a class="nav-link page-scroll" data-toggle="modal" data-target="#login-modal">Login</a>
                        </li>
                        <?php }else {?>
                          <li class="nav-item">
                            <a class="nav-link page-scroll" href="logout.php">Logout</a>
                          </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#aulaEspill">Aula Espill</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#comoSon">¿Cómo son?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#cursos">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Iniciar sesión</h1><br>
                    <form class="form-signin" method="post" id="login-form">
                        <input type="text" name="email" placeholder="Email" id="email">
                        <input type="password" name="contrasena" placeholder="Contraseña" id="contrasena">
                        <input type="button" class="btn btn-primary btn-xl" value="Login" id="bntLogin" onclick="botonLogin()">
                    </form>

                    <div class="login-help">
                        <a href="loginForm.php">Register</a> - <a href="#">Forgot Password</a>
                    </div>
                    <div id="login-error">

                    </div>
                </div>
            </div>
        </div>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1 id="homeHeading">Bienvenido a Aula Espill</h1>
                    <hr>
                    <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                    <a href="cursos.php" class="btn btn-primary btn-xl page-scroll">Ir a cursos</a>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="aulaEspill">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2 class="section-heading text-white">¿Qué es Aula Espill?</h2>
                        <hr class="light">
                        <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                        <a href="loginForm.php" class="page-scroll btn btn-default btn-xl sr-button">Registrate!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="comoSon">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">¿Cómo son nuestros cursos?</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                            <h3>Estudiar a tu ritmo</h3>
                            <p class="text-muted">Los cursos están configurados para ser usados online</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                            <h3>Listos al momento</h3>
                            <p class="text-muted">Empieza a estudiar en el momento en que compres un curso</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                            <h3>Actualizados</h3>
                            <p class="text-muted">Proponemos cursos en base a las necesidades sociales actuales</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                            <h3>Cara a cara</h3>
                            <p class="text-muted">Nuestros profesores están encantados de responder a tus preguntas</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="no-padding" id="cursos">
            <!--<div class="container-fluid">
            --><div class="row no-gutter popup-gallery" id="cursosIndex">

                </div>
            <!--</div>-->
        </section>

        <aside class="bg-dark">
            <div class="container text-center">
                <div class="call-to-action">
                    <h2>Free Download at Start Bootstrap!</h2>
                    <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
                </div>
            </div>
        </aside>

        <section id="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2 class="section-heading">¡Mándanos tus sugerencias!</h2>
                        <hr class="primary">
                        <p>¿Quieres que creemos un curso? ¿Quieres ser profesor? <br>¡Genial! Dános un toque y te atenderemos lo antes posible!</p>
                    </div>
                    <div class="col-lg-4 offset-lg-2 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>123-456-6789</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery Version 3.1.1 -->
        <script src="assets/lib/jquery/jquery.js"></script>

        <!-- Tether -->
        <script src="assets/lib/tether/tether.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="assets/lib/scrollreveal/scrollreveal.min.js"></script><!--
        <script src="assets/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
-->
        <!-- Theme JavaScript -->
        <script src="js/creative.min.js"></script>
        <script src="./app/main.js"></script>


    </body>

</html>
