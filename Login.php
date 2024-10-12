<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <img src="img/Login.png">
    <h1>Self-Service</h1>
    <p>Universidad Politécnica de San Luis Potosí</p>
    <form action="action_login.php" method="post">
        <label for="uname"><b>Usuario</b></label>
        <input type="text" placeholder="Escribe tu matr&iacute;cula" name="varUser" required>
        <label for="psw"><b>Contrase&ntilde;a</b></label>
        <input type="password" placeholder="Contrase&ntilde;a" name="varPass" required>
        <button class="button" type="submit">Acceso</button>
    </form>
    <div class="particles-container"></div>
    <script src="JS.js"></script>
</body>
</html>