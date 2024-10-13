<?php
	if (!isset($_COOKIE['nombreUsuario'])) {
		header("Location: Login.php");
	}

  $nombreUsuario = $_COOKIE['nombreUsuario'];
  $tipoUsuario = $_COOKIE['tipoUsuario'];
  $matri = $_COOKIE['matri'];
  $colorEstilo = '#000000';

  if ($tipoUsuario == '0'){
    $colorEstilo = '#8A2BE2'; // Admin - Morado/Purpura
    $text ='Administrador';
    $logo= 'img/Administrador.png';}
  else if  ($tipoUsuario == '1'){
    $colorEstilo = '#00CED1'; // Alum - Azul claro
    $text ='Alumno';
    $logo= 'img/Alumno.png';}
  else{
    $colorEstilo = '#FF4500'; // Prof - Rojo/Naranja
    $text ='Profesor';
    $logo= 'img/Profesor.png';}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            background-color: white;
        }

        header{
            background: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 85px;
            padding: 5px 10%;
            font-family: "Quicksand", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .header .logo{
            position: relative;
            cursor: pointer;
        }

        .header .logo img{
            height: 70px;
            weight: auto;
            transition: all 0.3s;
        }

        .header .logo img:hover{
            transform: scale(1.1);
        }

        /* Oculta el menú de información al inicio */
        .info-usuario {
            position: absolute;
            top: 85px; /* Alineado justo debajo de la imagen */
            left: 0;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            padding: 10px;
            width: 220px;
            z-index: 10;

            /* Inicialización para la transición */
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 300ms ease;
        }

        /* Triángulo invertido en la parte superior del menú */
        .info-usuario::before {
            content: '';
            position: absolute;
            top: -12px;
            left: 20px;
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            border-bottom: 12px solid white;
        }

        /* Estilo para cada elemento del menú emergente */
        .info-usuario li {
            list-style: none;
            padding: 8px 10px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            color: #333;
        }

        .info-usuario li:last-child {
            border-bottom: none;
        }

        /* Mostrar el menú con transición suave */
        .logo:hover .info-usuario {
            opacity: 1;
            visibility: visible;
            transform: translateY(0); /* Mueve el menú a su posición final */
        }

        nav{
            height: 100%;
        }

        nav > ul{
            height: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            padding: 0;
        }

        nav  ul  li{
            height: 100%;
            list-style: none;
            position: relative;
            margin: 0 10px;
            flex-grow: 1;
        }

        nav > ul > li > a{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: white;
            text-transform: uppercase;
            font-size: 18px;
            transition: all 300ms ease;
            text-decoration: none;
        }

        nav > ul > li > a:hover{
            transform: scale(1.1);
            background: <?php echo $colorEstilo; ?>;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }

        nav ul li ul{
            width: 200px;
            display: flex;
            flex-direction: column;
            background: white;
            position: absolute;
            top: 90px;
            left: -5px;
            padding: 14px 0px;
            visibility: hidden;
            opacity: 0;
            z-index: 10;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
            transition: all 300ms;
        }

        nav ul li:hover ul{
            visibility: visible;
            opacity: 1;
            top: 70px;
        }

        nav ul li ul:before{
            content: ' ';
            width: 0;
            height: 0;
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            border-bottom: 12px solid white;
            position: absolute;
            top: -12px;
            left: 20px;
        }

        nav ul li ul li a{
            display: block;
            color: #0099E9;
            padding: 6px;
            padding-left: 14px;
            margin-top: 10px;
            font-size: 14px;
            text-transform: uppercase;
            transition: all 300ms;
            text-decoration: none;
        }

        nav ul li ul li a:hover{
            background: <?php echo $colorEstilo; ?>;
            color: white;
            transform: scale(1.1);
            padding-left: 30px;
            font-size: 14px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }

        .header .btn button{
            font-weight: 700;
            color: #1b3039;
            font-size: 18px;
            padding: 12px 30px;
            background: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        .header .btn button:hover{
            background-color: white;
            color: black;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="<?php echo $logo; ?>" alt="logo del usuario">
            <ul class="info-usuario">
                <li>Nombre de usuario: <?php echo $nombreUsuario; ?></li>
                <li>Matrícula: <?php echo $matri; ?></li>
                <li>Tipo de usuario: <?php echo $text; ?></li>
            </ul>
        </div>
        <nav>
            <ul>
                <?php if ($tipoUsuario == '0') : ?>
                    <li><a href="#">Usuarios</a></li>
                    <li class="vista-admin"><a href="#">Control</a>
                        <ul>
                            <li><a href="#">Actualizar</a></li>
                            <li><a href="#">Eliminar</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if ($tipoUsuario == '1') : ?>
                    <li><a href="#">Calificaciones</a></li>
                    <li><a href="#">Horarios</a></li>
                    <li><a href="#">Salones</a></li>
                    <li><a href="#">Materias</a></li>
                <?php endif; ?>
                <?php if ($tipoUsuario == '2') : ?>
                    <li><a href="#">Calificaciones</a></li>
                    <li><a href="#">Materias</a></li>
                <?php endif; ?>
                <li><a href="#">Ayuda</a>
                    <ul>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <a href="action_salir.php" class="btn"><button>Salir</button></a>
    </header>
  </body>
</html>