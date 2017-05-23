<!DOCTYPE html>

<?php
session_start();
$idCurso = $_GET['idCurso'];
$url = 'http://localhost/api-slim/api-cursos.php/cursos/'.$idCurso;
$json = file_get_contents($url);
$row = (array) json_decode($json);
/*$mysqli=mysqli_connect('localhost','root','','aulaespill');

$query = "SELECT * FROM cursos WHERE idCurso='$idCurso'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( !$num_row >=1 ) {
      echo 'error 500';
		}*/

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cursos - Aula Espill</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <!-- Navigation -->

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="padding-top: 15px">Aula Espill</a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
								  <?php if(!isset($_SESSION['nombre'])){?>
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#login-modal"></span> Login</a></li>

                  <?php }else {?>
									<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"  data-toggle="modal" data-target="#myModal"></span></a></li>
                <?php if(($_SESSION['rolUsuario'])=='admin'){?>
                  <li>
                    <a href="#">
                      <span class="glyphicon glyphicon-key">  </span> Administrar
                    </a>
                  </li>
                <?php }?>
									<li>
                    <a href="updateUser.php">
										<span class="glyphicon glyphicon-user"> </span>
										<?php echo $_SESSION['nombre']?>
											</a>
                    </li>
									<li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span> ¿No eres tu?</a></li>
									<?php } ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Iniciar sesión</h1><br>
                <form class="form-signin" method="post" id="login-form">
                    <input type="text" name="email" placeholder="Email" id="email">
                    <input type="password" name="contrasena" placeholder="Contraseña" id="contrasena">
                    <input type="button" class="btn btn-primary btn-xl" value="Login" id="bntLogin" onclick="botonLogin()">
                </form>

                <div class="login-help">
                    <a href="singupForm.php">Register</a> - <a href="#">Forgot Password</a>
                </div>
                <div id="login-error">

                </div>
            </div>
        </div>
    </div>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
              <ul  id="carrito-body">

              </ul>
              <div id="precio-total"></div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

              <button type="button" class="btn btn-success" onclick="comprar( <?php echo $_SESSION['idUsuario']?>)">Comprar</button>
            </div>
          </div>

        </div>
      </div>

    </div>




    <!-- Page Content -->
    <div class="container" >

      <div id="cursoPrincipal">
			 <form method="post" action="carrito.php?id=<? = $row['idCurso']; ?>">
            <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $row['nombre'];?>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?= $row['foto']?>" alt="">
            </div>

            <div class="col-md-4">
                <h3>Descripción del curso</h3>
                <p><?= $row['descripcion']?></p>
                <h3>Detalles</h3>
                <ul>
                  <li>Tutor: <?= $row['tutor']?></li>
                    <li>Precio: <?= $row['precio']?> €</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>

                </ul>
								 <?php if(!isset($_SESSION['nombre'])){?>
									 <div><input type="button" class="btn btn-success btn-xl" value="Comprar" onclick="alert('No puedes comprar sin registrarte')"></div>
								<?php }else{?>
									<div><input type="submit" class="btn btn-success btn-xl" value="Comprar"></div>
								<?php }?>
                </div>
          </div>
				 </form>
        </div>

        <div class="row" id="cursosCursos">

            <div class="col-lg-12">
                <h3 class="page-header">Cursos</h3>
            </div>


        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Espill 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="assets/lib/jquery/jquery.js"></script>
    <script src="app/service/carritoService.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

		<script src="app/main.js"></script>


</body>

</html>
