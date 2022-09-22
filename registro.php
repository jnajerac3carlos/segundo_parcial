<html>
<head>
  <title>Parcial</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">

    <center><h1>REGISTRO DE ALUMNOS</h1></center>

    <form method="POST" action="registro.php" >

    <div class="form-group">
      <label for="id_estudiante">id_estudiante</label>
      <input type="text" name="id_estudiante" class="form-control" id="id_estudiante">
    </div>

    <div class="form-group">
        <label for="carnet">carnet </label>
        <input type="text" name="carnet" class="form-control" id="carnet" >
    </div>

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    <div class="form-group">
        <label for="apelildos">Apellidos </label>
        <input type="text" name="apellidos" class="form-control" id="apellidos" >
    </div>

    <div class="form-group">
        <label for="dir">Direccion </label>
        <input type="text" name="dir" class="form-control" id="dir">
    </div>

    <div class="form-group">
        <label for="tel">Telefono </label>
        <input type="text" name="tel" class="form-control" id="tel">
    </div>

    <div class="form-group">
        <label for="genero">genero </label>
        <input type="text" name="genero" class="form-control" id="genero" >
    </div>

    <div class="form-group">
        <label for="correo">correo </label>
        <input type="text" name="correo" class="form-control" id="correo" >
    </div>

    <div class="form-group">
        <label for="fecha_nacimiento">fecha_nacimiento </label>
        <input type="text" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" >
    </div>
    
    <center>
      <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
      <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
      <input type="submit" value="Actualizar" class="btn btn-info" name="btn_actualizar">
      <input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar">
    </center>

  </form>

  <?php
    include("abrir_conexion.php");
      
      $id_estudiante    ="";
      $nombre ="";
      $apellidos ="";
      $dir    ="";
      $tel    ="";
      $genero ="";
      $telefono ="";
      $fecha_nacimiento ="";
      

      if(isset($_POST['btn_registrar']))
      {      
        //INSERTAR
        mysqli_query($conexion, "INSERT INTO $parcial
        (campo1_mysql,campo2_mysql) 
          values 
        ('$variable1','$variable2')");
      }

      if(isset($_POST['btn_consultar']))
      {
        //consultar
        $estudiantes = mysqli_query($conexion,"SELECT * FROM $estudiantes WHERE id = '$otra_variable'");
        while($consulta = mysqli_fetch_array($estudiantes))
        {
          $variable=$consulta['campo_mysql'];
        }
      }

      if(isset($_POST['btn_actualizar']))
      {
          //ACTUALIZAR 
           $_UPDATE_SQL="UPDATE $estudiantes Set 
            campo_mysql='$variable', 
            campo_mysql2='$variable2'

            WHERE id='$otra_variable'"; 

            mysqli_query($conexion,$_UPDATE_SQL); 
      }

      if(isset($_POST['btn_eliminar']))
      {
          //ELIMINAR
          $_DELETE_SQL =  "DELETE FROM $estudiantes WHERE campo_mysql = '$variable'";
          mysqli_query($conexion,$_DELETE_SQL); 
      }

    include("cerrar_conexion.php");
  ?>

  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>