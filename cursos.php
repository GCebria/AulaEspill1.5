<!DOCTYPE html>

<?php
session_start();
$id = $_GET['id'];
$mysqli=mysqli_connect('localhost','root','','aulaespill');

$query = "SELECT * FROM cursos WHERE id='$id'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( !$num_row >=1 ) {
      echo 'error 500';
		}
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
								  <?php }else {?>
									<li><a href="#">
										<span class="glyphicon glyphicon-user"> </span>
										<?php echo $_SESSION['nombre']?>
											</a></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> ¿No eres tu?</a></li>

									<?php } ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" >

      <div id="cursoPrincipal">
            <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $row['nombre']?>
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
                </div>
          </div>
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
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="assets/lib/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="app/main.js"></script>


</body>

</html>
