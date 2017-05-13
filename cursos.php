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

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Aula Espill</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
								  <?php if(!isset($_SESSION['nombre'])){?>
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
									<li><a href="#" class="nav-link page-scroll" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
								  <?php }else {?>
									<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#carrito-modal"></span></a></li>

									<li><a href="#">
										<span class="glyphicon glyphicon-user"> </span>
										<?php echo $_SESSION['nombre']?>
											</a></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> ¿No eres tu?</a></li>
									<?php } ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
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
										<a href="singupForm.php">Register</a> - <a href="#">Forgot Password</a>
								</div>
								<div id="login-error">
								</div>
						</div>
				</div>
		</div>

		<div class="modal fade" id="carrito-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
			<div class="carromodal-container">
		<table id="cart" class="table table-hover table-condensed">
	    				<thead>
							<tr>
								<th style="width:50%">Curso</th>
								<th style="width:10%">Precio</th>
								<th style="width:8%">Quantity</th>
								<th style="width:22%" class="text-center">Subtotal</th>
								<th style="width:10%"></th>
							</tr>
						</thead>
						<tbody>
							<?php if(isset($_SESSION['carrito'])){
								foreach ($_SESSION['carrito'] as $curso){
								?>
							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
										<div class="col-sm-10">
											<h4 class="nomargin"><?php $curso['nombre'];?></h4>
											<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</td>
								<td data-th="Price"><?php $curso['precio'];?></td>
								<td data-th="Quantity">
									<input type="number" class="form-control text-center" value="1">
								</td>
								<td data-th="Subtotal" class="text-center">1.99</td>
								<td class="actions" data-th="">
									<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
									<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
								</td>
							</tr>
							<?php
						};
						}?>
						</tbody>
						<tfoot>
							<tr class="visible-xs">
								<td class="text-center"><strong>Total 1.99</strong></td>
							</tr>
							<tr>
								<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
								<td colspan="2" class="hidden-xs"></td>
								<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
								<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
							</tr>
						</tfoot>
					</table>
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
                <p><? $row['descripcion']?></p>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

		<script src="./app/main.js"></script>


</body>

</html>
