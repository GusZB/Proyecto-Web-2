<?php
	if (isset($_COOKIE['nombreUsuario'])) {
		header("Location: Menu 1.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        :root{
            --color-body: #000000;
            --color-particula: rgb(0, 22, 48);
            --color-particula-sombra: rgb(21, 126, 224);
            --color-texto: rgb(255, 255, 255);
            --color-boton: hsl(207, 100%, 53%);
            --color-boton-particula: hsl(207, 100%, 53%);
            --color-texto-boton: #000000;
        }

        .registro{
            --color-body: #000000;
            --color-particula: rgb(230, 159, 7);
            --color-particula-sombra: rgb(255, 255, 255);
            --color-texto: rgb(255,255,255);
            --color-boton: rgb(231, 155, 13);
            --color-texto-boton: rgb(0, 0, 0);
        }

        body{
            padding: 0;
            margin: 0;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
            background: var(--color-body);
            color: var(--color-texto);
        }

        img{
            height: 100vh;
            width: 50vw;
            object-fit: cover;
            display: block;
        }

        h1{
            position: absolute;
            top: 10vh;
            left: 63.2vw;
            font-size: 68px;
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        p{
            position: absolute;
            top: 24vh;
            left: 60.2vw;
            font-size: 26px;
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        label{
            font-size: 24px;
            font-family: "Signika", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings: "GRAD" 0;
        }

        @media (min-width: 1870px){
        h1{
            position: absolute;
            top: 10vh;
            left: 66vw;
            font-size: 60px;
        }

        p{
            position: absolute;
            top: 24vh;
            left: 60.7vw;
            font-size: 26px;
        }

        form{
            position: absolute;
            top: 200px;
            left: 54vw;
            transform: translateX(-1vw);
            font-size: 20px;
            display: flex;
            flex-direction: column;
        }
        }

        @media (max-height: 784px){
        h1{
            position: absolute;
            top: 6vh;
            left: 60.4vw;
            font-size: 60px;
        }

        p{
            position: absolute;
            top: 20vh;
            left: 54.2vw;
            font-size: 26px;
        }

        form{
            position: absolute;
            top: 200px;
            left: 54vw;
            transform: translate(-1vw,-20px);
            font-size: 20px;
            display: flex;
            flex-direction: column;
        }
        }

        form{
            position: absolute;
            top: 35vh;
            left: 54vw;
            font-size: 20px;
            display: flex;
            flex-direction: column;
        }

        form > input{
            margin: 30px 0px;
            height: 30spx;
            width: 43vw;
            border-radius: 6px;
            font-size: 1.5em;
            padding: 6px;
            background: var(--color-body);
            border: 1px solid white;
            font-family: 'calibri';
            color: white;
        }

        form > button{
            border: none;
            margin: 12px 0px;
            padding: 10px 22px;
            width: 140px;
            height: 50px;
            font-size: 16px;
            font-weight: 400;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: var(--color-texto-boton);
            background: white;
            cursor: pointer;
            border-radius: 7px;
            transition: transform 0.2s ease;
            box-shadow: 0 5px 10px rgb(0, 0, 0, 0.1);
        }

        .button {
            position: relative;
            padding: 10px 22px;
            border-radius: 6px;
            border: none;
            color: var(--color-texto-boton);
            cursor: pointer;
            background-color: var(--color-boton);
            transition: all 0.2s ease;
        }
        
        .button:active {
            transform: scale(1);
        }

        .button:hover{
            transform: scale(1.1);
            background: rgb(0, 0, 95);
            color: white;
        }
        
        .button:before,
        .button:after{ 
            transform: scale(2);
            position: absolute;
            content: "";
            width: 150%;
            left: 50%;
            height: 100%;
            transform: translateX(-50%);
            z-index: -1000;
            background-repeat: no-repeat;
        }
        
        .button:hover:before {
            top: -70%;
            background-image: radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, transparent 20%, var(--color-boton-particula) 20%, transparent 30%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, transparent 10%, var(--color-boton-particula) 15%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%);
            background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%,
            10% 10%, 18% 18%;
            background-position: 50% 120%;
            animation: greentopBubbles 0.6s ease;
        }
        
        @keyframes greentopBubbles {
            0% {
            background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%,
                40% 90%, 55% 90%, 70% 90%;
            }
        
            50% {
            background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%,
                50% 50%, 65% 20%, 90% 30%;
            }
        
            100% {
            background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%,
                50% 40%, 65% 10%, 90% 20%;
            background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
            }
        }
        
        .button:hover::after {
            bottom: -70%;
            background-image: radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, transparent 10%, var(--color-boton-particula) 15%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%),
            radial-gradient(circle, var(--color-boton-particula) 20%, transparent 20%);
            background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 20% 20%, 18% 18%;
            background-position: 50% 0%;
            animation: greenbottomBubbles 0.6s ease;
        }
        
        @keyframes greenbottomBubbles {
            0% {
            background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%,
                70% -10%, 70% 0%;
            }
        
            50% {
            background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%,
                105% 0%;
            }
        
            100% {
            background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%,
                110% 10%;
            background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
            }
        }

        .particles-container {
            position: absolute;
            top: 76vh;
            left: 50vw;
            width: 50vw;
            height: 30vh;
            overflow: hidden;
            z-index: 0;
        }

        .particula {
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: var(--color-particula);
            border-radius: 50%;
            filter: drop-shadow(0 0 10px var(--color-particula-sombra));
            z-index: 1;
        }
    </style>
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
    <script>
        function crearParticulas(numParticulas) {
            const particlesContainer = document.querySelector(".particles-container");

            for (let i = 0; i < numParticulas; i++) {
                let particula = document.createElement("div");
                particula.classList.add("particula");
                particlesContainer.appendChild(particula);
            }
        }

        function createParticleStyles() {
            let styles = '';
            const containerWidth = document.querySelector('.particles-container').offsetWidth;
            const containerHeight = document.querySelector('.particles-container').offsetHeight;

            for (let i = 1; i <= 58; i++) {
                const opacity = (Math.random() * 0.5 + 0.5).toFixed(2);
                const startX = Math.floor(Math.random() * containerWidth);  // Posición inicial X dentro del contenedor
                const startY = containerHeight + Math.floor(Math.random() * 20); // Iniciar justo debajo del contenedor
                const endX = Math.floor(Math.random() * containerWidth);    // Posición final X
                const endY = -20; // Terminan justo fuera del contenedor hacia arriba
                const duration = Math.random() * 8 + 12; // Duración entre 12s y 20s (más rápida)
                const scale = (Math.random() * 0.5 + 1.9).toFixed(2); // Escala entre 1.2 y 1.7 (más grande)

                styles += `
                .particula:nth-child(${i}) {
                    opacity: ${opacity};
                    transform: translate(${startX}px, ${startY}px) scale(${scale});
                    animation: subir-${i} ${duration}s linear infinite;
                }
                
                @keyframes subir-${i} {
                    60% {
                        opacity: 1; /* Totalmente visible */
                    }
                    100% {
                        transform: translate(${endX}px, ${endY}px) scale(${scale});
                        opacity: 0; /* Desaparece al final */
                    }
                }
                `;
            }
            const styleElement = document.createElement('style');
            styleElement.innerHTML = styles;
            document.head.appendChild(styleElement);
        }

        crearParticulas(58);
        createParticleStyles();
    </script>
</body>
</html>