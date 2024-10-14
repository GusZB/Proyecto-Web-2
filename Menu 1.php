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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
            background-color: #1C1C1C;
        }

        /*----------------------------------------------------------------------------------------------BARRA DE NAVEGACIÓN*/

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

        .info-usuario {
            position: absolute;
            top: 85px;
            left: 0;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            padding: 10px;
            width: 220px;
            z-index: 10;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 300ms ease;
        }

        .info-usuario::before {
            content: '';
            position: absolute;
            top: -12px;
            left: 20px;
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            border-bottom: 12px solid white;
        }

        .info-usuario li {
            list-style: none;
            padding: 8px 10px;
            border-bottom: 3px solid <?php echo $colorEstilo;?>;
            font-size: 14px;
            color: black;
        }

        .info-usuario li:last-child {
            border-bottom: none;
        }

        .logo:hover .info-usuario {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
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
            color: black;
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

        /*------------------------------------------------------------------------------------------------------------------*/

        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 20px;
            padding: 20px;
        }

        .recuadro {
            background: #2E2E2E;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .grande {
            grid-column: span 2;
            grid-row: span 2;
            min-height: 300px;
        }

        .mediano {
            grid-column: span 2;
            min-height: 150px;
        }

        .pequeno {
            min-height: 100px;
        }

        /*----------------------------------------------------------------------------------------------CARRUSEL*/

        .carrusel{
            position: relative;
            width: 100%;
            height: 100%;
            background-color: white;
            overflow: hidden;
            z-index: 1;/*evitar sobreposicion del carrusel con la barra de navegación"*/
        }

        .carruseles{
            width: 500%;/*depende del num de imagenes*/
            height: 100%;
            display: flex;
        }

        .slider{
            width: calc(100%/5);/*carrusel para 4 imagenes*/
            height: 100%;
        }

        .slider img{
            width: 100%;
            height: 100%;
            object-fit: cover;/*que las imagenes no pierdan su calidad*/
        }

        .bl,.br{/*botones del carrusel*/
            display: flex;
            position: absolute;
            top: 50%;
            font-size: 1.5rem;
            background-color: transparent;
            border-radius: 50%;
            padding: 5px;
            font-weight: 600;
            cursor: pointer;
            color: white;
            transform: translate(0,-50%);
            transition: 0.5s ease;
            user-select: none;
        }

        .bl{
            left: 10px;
        }

        .br{
            right: 10px;
        }

        .bl:hover,.br:hover{
            background-color: black;
            color: white;
        }

        /*-------------------------------------------------------------------------------------------CALENDARIO*/

        .calendario{
            width: 99%;
            height: 99%;
            display: flex;
            flex-direction: column;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            color: white;
            font-family: "Exo 2", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        @media (max-height: 784px){
            .calendario{
                width: 99%;
                height: 99%;
                display: flex;
                flex-direction: column;
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.3);
                color: white;
            }
        }

        .header-calendario{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .mes-year{
            text-align: center;
            font-weight: 600;
            width: 150px;
        }

        .header-calendario button{
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            border-radius: 50%;
            background: white;
            cursor: pointer;
            width: 40px;
            height: 40px;
            box-shadow: 0 0 4px rgba(0,0,0,0.2);
        }

        .dias{
            display: flex;
            flex-wrap: wrap;
        }

        .dia{
            flex: 1 0 10.28%; /* Cada día ocupa aproximadamente el 14.28% del ancho */
            text-align: center;
            padding: 10px;
            box-sizing: border-box; /* Asegura que el padding no afecte el ancho */
            margin: 2px; /* Espacio entre los días */
        }

        .fechas{
            display: grid;
            grid-template-columns: repeat(7,1fr);
            gap: 5px;
        }

        .fecha{
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 10px;
            margin: auto;
            cursor: pointer;
            font-weight: 600;
            border-radius: 50%;
            height: 40px;
            transition: 0.2s;
        }

        .fecha:hover,
        .fecha.active{
            background: <?php echo $colorEstilo; ?>;
            color: white; 
        }

        .fecha.inactive{
            color: #A9A9A9;
        }

        .fecha.inactive:hover{
            color: white;
        }

        /*-------------------------------------------------*/

        .anuncios {
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            height: 99%;
            display: flex;
            flex-direction: column;
            padding: 40px;
            font-size: 1.2rem;
            color: black;
            color: white;
            font-family: "Exo 2", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        .anuncios > hr{
            margin: 6px 0px 20px 0px;
        }

        .anuncios > ul{
            margin-left: 3%; 
        }

        .anuncios > ul > li{
            margin: 30px 0px 10px 0px;
        }

        .anuncios > ul > li > label{
            color: #3498db;
        }

        @media (max-height: 784px){
            .anuncios {
                height: 99%;
                display: flex;
                flex-direction: column;
                padding: 40px;
                font-size: 1.2rem;
                color: black;
                color: white;
                font-family: "Exo 2", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
            }

            .anuncios > hr{
                margin: 5px 0px 10px 0px;
            }

            .anuncios > ul{
                margin-left: 2%; 
            }

            .anuncios > ul > li{
                margin: 0px 0px 15px 0px;
            }
        }

        /*---------------------------------------------------------------------------------------BOTONES*/
        .botones-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 10px;
            margin-top: 10px;
            font-family: "Exo 2", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .button {
            --color: <?php echo $colorEstilo; ?>;
            padding: 0.8em 1.7em;
            background-color: transparent;
            border-radius: .3em;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: .5s;
            font-weight: 700;
            font-size: 17px;
            border: 1px solid;
            font-family: inherit;
            text-transform: uppercase;
            color: var(--color);
            z-index: 1;
        }

        .button > a{
            text-decoration: none;
            color: inherit;
        }

        .button::before, .button::after {
            content: '';
            display: block;
            width: 50px;
            height: 50px;
            transform: translate(-50%, -50%);
            position: absolute;
            border-radius: 50%;
            z-index: -1;
            background-color: var(--color);
            transition: 1s ease;
        }

        .button::before {
            top: -1em;
            left: -1em;
        }

        .button::after {
            left: calc(100% + 1em);
            top: calc(100% + 1em);
        }

        .button:hover::before, .button:hover::after {
            height: 410px;
            width: 410px;
        }

        .button:hover {
            color: rgb(10, 25, 30);
        }

        .button:active {
            filter: brightness(.8);
        }

        /*-----------------------------------------------------------------------------FRASES INSPIRADORAS*/
        .frase-inspiradora {
            color: white;
            display:flex;
            height: 99%;
            width: 99%;
            border-radius: 10px;
            padding: 20px;
            font-size: 1.2em;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: "Exo 2", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        /*----------------------------------------------------------------------------PUNTUACION*/
        .radio {
            display: flex;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            height: 99%;
            width: 99%;
            justify-content: center;
            gap: 10px;
            padding: 3% 0% 1% 0%; 
        }

        .radio > input {
            position: absolute;
            appearance: none;
        }

        .radio > label {
            cursor: pointer;
            font-size: 60px;
            position: relative;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .radio > label > svg {
            fill: #666;
            transition: fill 0.3s ease;
        }

        .radio > label::before,
        .radio > label::after {
            content: "";
            position: absolute;
            width: 6px;
            height: 6px;
            background-color: #ff9e0b;
            border-radius: 50%;
            opacity: 0;
            transform: scale(0);
            transition:
                transform 0.4s ease,
                opacity 0.4s ease;
            animation: particle-explosion 1s ease-out;
        }

        .radio > label::before {
            top: -15px;
            left: 50%;
            transform: translateX(-50%) scale(0);
        }

        .radio > label::after {
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%) scale(0);
        }

        .radio > label:hover::before,
        .radio > label:hover::after {
            opacity: 1;
            transform: translateX(-50%) scale(1.5);
        }

        .radio > label:hover {
            transform: scale(1.2);
            animation: pulse 0.6s infinite alternate;
        }

        /* Star glow and animation on hover */
        .radio > label:hover > svg {
            fill: #ff9e0b;
            filter: drop-shadow(0 0 15px rgba(255, 158, 11, 0.9));
            animation: shimmer 1s ease infinite alternate;
        }

        .radio > input:checked + label > svg {
            fill: #ff9e0b;
            filter: drop-shadow(0 0 15px rgba(255, 158, 11, 0.9));
            animation: pulse 0.8s infinite alternate;
        }

        .radio > input:checked + label ~ label > svg,
        .radio > input:checked + label > svg {
            fill: #ff9e0b; /* Highlight the stars */
        }

        @keyframes pulse {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.1);
        }
        }

        @keyframes particle-explosion {
        0% {
            opacity: 0;
            transform: scale(0.5);
        }
        50% {
            opacity: 1;
            transform: scale(1.2);
        }
        100% {
            opacity: 0;
            transform: scale(0.5);
        }
        }

        @keyframes shimmer {
        0% {
            filter: drop-shadow(0 0 10px rgba(255, 158, 11, 0.5));
        }
        100% {
            filter: drop-shadow(0 0 20px rgba(255, 158, 11, 1));
        }
        }

        .radio > input:checked + label:hover,
        .radio > input:checked + label:hover ~ label {
            fill: #e58e09;
        }

        .radio > label:hover,
        .radio > label:hover ~ label {
            fill: #ff9e0b;
        }

        .radio input:checked ~ label svg {
            fill: #ffa723;
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

    <div class="container">
        <div class="recuadro grande">
            <div class="carrusel">
                <div class="carruseles" id="slider1">
                    <section class="slider"><img src="img/Login.png" alt=""></section>
                    <section class="slider"><img src="img/Login.png" alt=""></section>
                    <section class="slider"><img src="img/Login.png" alt=""></section>
                    <section class="slider"><img src="img/Login.png" alt=""></section>
                    <section class="slider"><img src="img/Login.png" alt=""></section>
                </div>
                <div class="bl"><ion-icon name="caret-back-outline"></ion-icon></div>
                <div class="br"><ion-icon name="caret-forward-outline"></ion-icon></div>
            </div>
        </div>
        <div class="recuadro mediano">
            <div class="seccion anuncios">
                <h2>Recordatorios de Fechas Importantes</h2>
                <hr>
                <ul>
                    <li><label>Exámenes finales:</label> Exámenes finales: 30 de noviembre - 6 de diciembre.</li>
                    <li><label>Exámenes extraordinarios:</label> 9 de diciembre - 14 de diciembre.</li>
                    <li><label>Exámenes de regularización:</label> 16 de diciembre - 18 de diciembre.</li>
                </ul>
            </div>
        </div>
        <div class="recuadro mediano">
            <div class="seccion calendario">
                <div class="header-calendario">
                    <button id="prevBtn">◀</button>
                    <div class="mes-year" id="mesYear"></div>
                    <button id="nextBtn">▶</button>
                </div>
                <div class="dias">
                    <div class="dia">Lun</div>
                    <div class="dia">Mar</div>
                    <div class="dia">Mié</div>
                    <div class="dia">Jue</div>
                    <div class="dia">Vie</div>
                    <div class="dia">Sáb</div>
                    <div class="dia">Dom</div>
                </div>
                <div class="fechas" id="fechas"></div>
            </div>
        </div>
        <div class="recuadro pequeno">
            <div class="botones-container">
                <button class="button"><a href="https://www.youtube.com/c/UPSLPoficial2001">Youtube</a></button>
                <button class="button"><a href="https://www.facebook.com/upslp">Facebook</a></button>
                <button class="button"><a href="https://www.instagram.com/upslp_oficial/?hl=es-la">Instagram</a></button>
                <button class="button"><a href="https://www.upslp.edu.mx/upslp/">Pagina web</a></button>
            </div>
        </div>
        <div class="recuadro pequeño">
            <div class="frase-inspiradora">
                <p id="frase"></p>
            </div>
        </div>
        <div class="recuadro mediano">
            <div class="radio">
                <input value="1" name="rating" type="radio" id="rating-1" />
                <label title="1 stars" for="rating-1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                    <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                    ></path>
                    </svg>
                </label>

                <input value="2" name="rating" type="radio" id="rating-2" />
                <label title="2 stars" for="rating-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                    <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                    ></path>
                    </svg>
                </label>

                <input value="3" name="rating" type="radio" id="rating-3" />
                <label title="3 stars" for="rating-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                    <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                    ></path>
                    </svg>
                </label>

                <input value="4" name="rating" type="radio" id="rating-4" />
                <label title="4 stars" for="rating-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                    <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                    ></path>
                    </svg>
                </label>

                <input value="5" name="rating" type="radio" id="rating-5" />
                <label title="5 star" for="rating-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                    <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                    ></path>
                    </svg>
                </label>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        //-----------------------------------------------------------------------------------------------------
        /*Carrusel de imagenes*/
        const botonIzq = document.querySelector(".bl");
        const botonDer = document.querySelector(".br");
        const slideer = document.querySelector("#slider1");
        const sliderSection = document.querySelectorAll(".slider");
        let op = 0;
        let counter = 0;
        // botones
        botonIzq.addEventListener("click", moverIzq);
        botonDer.addEventListener("click", moverDer);
        // cambiar imagen cada 5s
        setInterval(moverDer, 5000);
        // Mover la imagen a la derecha
        function moverDer() {
            if (counter >= sliderSection.length - 1) {
                op = 0;
                counter = 0;
            } else {
                counter++;
                op += 100 / sliderSection.length;
            }
            slideer.style.transform = `translateX(-${op}%)`;
            slideer.style.transition = "transform 0.6s ease";
        }
        // Mover la imagen a la izquierda
        function moverIzq() {
            if (counter <= 0) {
                counter = sliderSection.length - 1;
                op = 100 - (100 / sliderSection.length);
            } else {
                counter--;
                op -= 100 / sliderSection.length;
            }
            slideer.style.transform = `translateX(-${op}%)`;
            slideer.style.transition = "transform 0.6s ease";
        }

            
        //----------------------------------------------------------CALENDARIO-------------------------------------------------------------------------
        const mesYearElement = document.getElementById('mesYear');
        const fechas = document.getElementById('fechas');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        let currentFecha = new Date();

        const actualizarCalendario = () => {
            const currentYear = currentFecha.getFullYear();
            const currentMes = currentFecha.getMonth();

            const primerDia = new Date(currentYear, currentMes, 0);
            const ultimoDia = new Date(currentYear, currentMes + 1, 0);
            const totalDia = ultimoDia.getDate();
            const primerDiaIndex = primerDia.getDay();
            const ultimoDiaIndex = ultimoDia.getDay();

            const monthYearString = currentFecha.toLocaleString('default', { month: 'long', year: 'numeric' });
            mesYearElement.textContent = monthYearString;

            let fechaHTML = '';

            for (let i = primerDiaIndex; i > 0; i--) {
                const anteriorFecha = new Date(currentYear, currentMes, 0 - i + 1);
                fechaHTML += `<div class="fecha inactive">${anteriorFecha.getDate()}</div>`;
            }

            for (let i = 1; i <= totalDia; i++) {
                const fecha = new Date(currentYear, currentMes, i);
                const activeClass = fecha.toDateString() === new Date().toDateString() ? 'active' : '';
                fechaHTML += `<div class="fecha ${activeClass}">${i}</div>`;
            }

            for (let i = 1; i <= 7-ultimoDiaIndex; i++) {
                const siguienteFecha = new Date(currentYear, currentMes + 1, i);
                fechaHTML += `<div class="fecha inactive">${siguienteFecha.getDate()}</div>`;
            }

            fechas.innerHTML = fechaHTML;
        };

        prevBtn.addEventListener('click', () => {
            currentFecha.setMonth(currentFecha.getMonth() - 1);
            actualizarCalendario();
        });

        nextBtn.addEventListener('click', () => {
            currentFecha.setMonth(currentFecha.getMonth() + 1);
            actualizarCalendario();
        });

        actualizarCalendario();

        /*--------------------------------------------------------FRASES-------------------------------------------*/
        const frases = [
            "El éxito es la suma de pequeños esfuerzos repetidos día tras día.",
            "Nunca es tarde para aprender algo nuevo.",
            "La disciplina supera al talento.",
            "El futuro pertenece a quienes creen en la belleza de sus sueños."
        ];

        document.getElementById("frase").textContent = frases[Math.floor(Math.random() * frases.length)];
    </script>
  </body>
</html>
