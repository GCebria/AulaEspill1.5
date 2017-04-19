Repite la contaseña<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

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
  </head>
  <body>
    <form class="form-horizontal" method="post" action="createAlumno.php">
    <fieldset>

    <!-- Form Name -->
    <legend>Sign Up For Free Account</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Nombre">Nombre</label>
      <div class="col-md-6">
      <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Apellidos">Apellidos</label>
      <div class="col-md-6">
        <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos" class="form-control input-md" required="">

      </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Mail ">Mail </label>
      <div class="col-md-6">
        <input id="mail " name="mail " type="text" placeholder="Mail " class="form-control input-md" required="">

      </div>
    </div>

    <!-- Contraseña input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Contraseña">Contraseña</label>
      <div class="col-md-6">
        <input id="contrasena" name="contrasena" type="contrasena" placeholder="Contraseña" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Contraseña input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Password Again">Repite la contaseña</label>
      <div class="col-md-6">
        <input id="recontrasena" name="recontrasena" type="password" placeholder="Repite la contaseña" class="form-control input-md" required="">

      </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Teléfono">Teléfono</label>
      <div class="col-md-6">
      <input id="telefono" name="telefono" type="text" placeholder="Teléfono" class="form-control input-md" required="">

      </div>
    </div>
    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Dirección">Dirección</label>
      <div class="col-md-4">
        <textarea class="form-control" id="direccion" name="direccion">Dirección</textarea>
      </div>
    </div>


    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for=""></label>
      <div class="col-md-4">
        <button id="" name="" class="btn btn-success">Enviar</button>
      </div>
    </div>

    </fieldset>
    </form>
  </body>
</html>
