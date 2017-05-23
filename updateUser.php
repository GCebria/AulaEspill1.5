<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>
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
          <a class="navbar-brand" href="#">Aula Espill</a>
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
                  <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#carrito-modal"></span></a></li>

                  <li><a href="#">
                    <span class="glyphicon glyphicon-user"> </span>
                    <?php echo $_SESSION['nombre']?>
                      </a></li>
                  <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span> ¿No eres tu?</a></li>
                  <?php } ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


             <div class="main-container">
                <div class="container">
                   <div class="row">
              <div class="profile-nav col-md-3">
                <div class="panel navbar-offcanvas navbar-offcanvas-touch" id="left-menu-bar-id">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="user.png" alt="">
                        </a>
                        <h1>Tu perfil</h1>
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="profile.html"><span class="glyphicon glyphicon-user"></span> &nbsp;Perfil</a></li>
                      <li><a href="myfaveads.html"><span class="glyphicon glyphicon-star"></span> &nbsp;Mis cursos</a></li>
                      <li><a href="userprofile-myads.html"><span class="glyphicon glyphicon-bullhorn"></span>  &nbsp;Alertas</a></li>
                      <li><a href="profile-setting.html"> <span class="glyphicon glyphicon-pencil"></span> &nbsp;Editar perfil</a></li>
                    </ul>
                </div>
                </div>
                <div class="profile-info col-md-9" style="box-shadow: 0 0 2px 0 #d3cbb8; background-color:#FFFFFF; padding-top:15px;">

                  <h2 class="cat-title"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Actualizar Perfil</h2>
                            <div class="row">
                               <div class="col-sm-12">
                                  <form class="form-horizontal">
                                     <fieldset>
                                        <div class="form-group required">
                                           <label class="col-md-4 control-label">Nombre</label>
                                           <div class="col-md-6"><input id="nombre" name="" value="<?php echo $_SESSION['nombre']?>" class="form-control input-md" required="" type="text"></div>
                                        </div>
                                        <div class="form-group required">
                                           <label class="col-md-4 control-label">Apellidos</label>
                                           <div class="col-md-6"><input id="apellidos" name="textinput" value="<?php echo $_SESSION['apellidos']?>" class="form-control input-md" type="text"></div>
                                        </div>
                                        <div class="form-group required">
                                             <label class="col-md-4 control-label">Teléfono</label>
                                             <div class="col-md-6">
                                              <input id="telefono" name="textinput" class="form-control input-md" type="text" value="<?php echo $_SESSION['telefono']?>">
                                           </div>
                                        </div>

                                        <div class="form-group">
                                           <label class="col-md-4 control-label" for="textarea">Dirección</label>
                                           <div class="col-md-6"><textarea id="direccion" class="form-control" rows="5" name="textarea"><?php echo $_SESSION['direccion']?></textarea></div>
                                        </div>
                                        <div class="form-group required">
                                           <label for="inputEmail3" class="col-md-4 control-label">Email</label>
                                           <div class="col-md-6"><input id="email" type="email" class="form-control" value="<?php echo $_SESSION['email']?>" ></div>
                                        </div>
                                        <div class="form-group required">
                                           <label for="inputPassword3" class="col-md-4 control-label">Contraseña </label>
                                           <div class="col-md-6">
                                              <input type="password" id="contrasena" type="password" class="form-control"  placeholder="*******">
                                           </div>
                                        </div>
                                        <div class="form-group">
                                           <label class="col-md-4 control-label"></label>
                                           <div class="col-md-8">
                                              <a class="btn btn-success" onclick="updateUser(<?php echo $_SESSION['idUsuario']?>)" href="#">Actualizar</a>&nbsp;&nbsp;<a class="btn btn-danger" href="#">Cancel</a>
                                           </div>
                                        </div>
                                     </fieldset>
                                  </form>
                               </div>
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>





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
    <script src="app/service/crudUser.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>

		<script src="app/main.js"></script>


</body>

</html>
