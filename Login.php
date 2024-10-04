<?php
	if (isset($_COOKIE['nombreUsuario'])) {
		header("Location: Menu 1.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Acceso al sistema</h2>

<form action="action_login.php" method="post">
<div class="container">
<label for="uname"><b>Usuario</b></label>
<input type="text" placeholder="Escribe tu matr&iacute;cula" name="varUser" required>

<label for="psw"><b>Contrase&ntilde;a</b></label>
<input type="password" placeholder="Contrase&ntilde;a" name="varPass" required>
        
<button type="submit">Acceso</button>
</div>

</form>

</body>
</html>