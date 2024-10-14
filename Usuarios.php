<html>
    <head>
        <link rel="stylesheet" href="design_users.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                margin: 0;
                padding: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: "Quicksand", sans-serif;
                background-color: #f0f0f0;
            }
            
            .container {
                display: flex;
                width: 90%;
                height: 90%;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            }

            .image-side {
                flex: 1;
                background: url('img/upslp.png') no-repeat center center;
                background-size: cover;
                clip-path: ellipse(100% 70% at 60% 50%);
                opacity: 0.9;
            }

            .form-horizontal {
                flex: 1;
                padding: 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                background-color: white;
                box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
                height: 100%;
            }

            .form-header {
                text-align: center;
                margin-bottom: 50px;
            }

            .form-header h2 {
                font-size: 20px;
                color: #ff8800;
                margin: 0;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                font-size: 16px;
                color: #333;
                margin-bottom: 5px;
                display: block;
            }

            .form-control {
                width: 100%;
                border: none;
                border-bottom: 2px solid #ff8800;
                padding: 10px 0;
                font-size: 10px;
                color: #333;
                background: transparent;
                outline: none;
                transition: border-bottom-color 0.3s;
            }

            .form-control:focus {
                border-bottom-color: #ffb733;
            }

            button.btn {
                width: 100%;
                padding: 15px;
                font-size: 10px;
                background-color: #ff8800;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
                transition: background-color 0.3s;
            }

            button.btn:hover {
                background-color: #e57a00;
            }

            .help-block {
                font-size: 12px;
                color: #777;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="image-side"></div>
            <form class="form-horizontal" action="action_usuario_guardar.php" method="post">
                <div class="form-header">
                    <h2>Registro de Usuarios</h2>
                </div>

                <div class="form-group">
                    <label for="varMatricula">Matrícula</label>
                    <input id="varMatricula" name="varMatricula" type="text" placeholder="Matrícula (Ingrese 6 dígitos)" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="varNombre">Nombre completo</label>
                    <input id="varNombre" name="varNombre" type="text" placeholder="Nombre completo" class="form-control">
                </div>

                <div class="form-group">
                    <label for="varCarrera">Carrera</label>
                    <select id="varCarrera" name="varCarrera" class="form-control">
                        <option value="1">Opción uno</option>
                        <option value="2">Opción dos</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="varGeneracion">Generación</label>
                    <input id="varGeneracion" name="varGeneracion" type="text" placeholder="Generación" class="form-control">
                    <span class="help-block">Año de ingreso</span>
                </div>

                <div class="form-group">
                    <label for="varsemestre">Semestre</label>
                    <input id="varsemestre" name="varsemestre" type="text" placeholder="Semestre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="varUsername">Usuario</label>
                    <input id="varUsername" name="varUsername" type="text" placeholder="Nombre de usuario" class="form-control">
                </div>

                <div class="form-group">
                    <label for="varPassword">Contraseña</label>
                    <input id="varPassword" name="varPassword" type="password" placeholder="Contraseña" class="form-control">
                </div>

                <div class="form-group">
                    <label for="varTipo">Tipo usuario</label>
                    <select id="varTipo" name="varTipo" class="form-control">
                        <option value="0">Administrador</option>
                        <option value="1">Estudiante</option>
                        <option value="2">Docente</option>
                    </select>
                </div>

                <div class="form-group">
                    <button id="btnGuardar" name="btnGuardar" class="btn">Guardar</button>
                </div>
            </form>
        </div>
    </body>
</html>
