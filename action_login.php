<?php
  // Capturar valores de POST
  $nombreUsuario = $_POST['varUser'];
  $valorContrasenia = $_POST['varPass'];
  
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $database = 'mysql';
  $link = mysqli_connect($server, $user, $pass, $database);

  if(!$link) { header("Location: Login.php"); }

  $database = 't15a_proyecto';
  $band = false;
  mysqli_select_db($link, $database);
  $cadQuery = "SELECT * FROM usuarios WHERE username = '$nombreUsuario' AND password = '$valorContrasenia'";
  $query = mysqli_query($link, $cadQuery);
  for ($c = 0; $c < mysqli_num_rows($query); $c++) {
    $f = mysqli_fetch_array($query);

    $matri = $f[0];
    $nombreUsuario = $f[1];
    $tipoUsuario = $f[7];
    $band = true;
  }
  mysqli_close($link);

  if ($band) {
    // Crear las cookies
    setcookie("nombreUsuario", $nombreUsuario);
    setcookie("tipoUsuario", $tipoUsuario);
    setcookie("matri",$matri);
    // Enviar al menu
    header("Location: Menu 1.php");
  }
  else { header("Location: Login.php"); }
?>