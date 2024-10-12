<?php
	if (!isset($_COOKIE['nombreUsuario'])) {
		header("Location: Login.php");
	}

  $nombreUsuario = $_COOKIE['nombreUsuario'];
  $tipoUsuario = $_COOKIE['tipoUsuario'];
  $varmatri = $_COOKIE['mati'];
  $colorEstilo = '#000000';


  if ($tipoUsuario == '0'){
    $colorEstilo = '#dc3545'; // Admin - Rojo
    $text ='Administrador';}
  else if  ($tipoUsuario == '1'){
    $colorEstilo = '#28a745'; // Alum - Verde
    $text ='Alumno';}
  else{
    $colorEstilo = '#007bff'; // Prof - Azul
    $text ='Profesor';}
?>
<html>
  <head>
  </head>
  <body>
    <h2 style="background-color: <?php echo $colorEstilo; ?>; color: white; font-weight: bold;"><?php echo $nombreUsuario;echo"          " ; echo $text;echo"          " ; echo $varmatri;?></h2>
    <ul style="list-style-type:square">
      <li><a href="Usuarios.php">Usuarios</a></li>
      <li><a href="tabla.php">Borrar Campos</a></li>
      <li><a href="tabla_update.php">Actualizar campos</a></li>
      <li>Ayuda
        <ul style="list-style-type:circle">
          <li>FAQ's</li>
          <li>Contacto</li>
        </ul>
      </li>
      <li><a href="action_salir.php">Salir</a></li>
    </ul>
  </body>
</html>