<html>
    <head>
    </head>
    <body>
        <form class="form-horizontal" action="action_usuario_guardar.php" method="post">
            <fieldset>
            
            <!-- Form Name -->
            <legend>Registro de usuarios</legend>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="varMatricula">Matrícula</label>  
              <div class="col-md-4">
              <input id="varMatricula" name="varMatricula" type="text" placeholder="Matrícula" class="form-control input-md" required="">
              <span class="help-block">El formato de la matrícula son 6 dígitos</span>  
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="varNombre">Nombre completo</label>  
              <div class="col-md-5">
              <input id="varNombre" name="varNombre" type="text" placeholder="Nombre completo" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="varCarrera">Carrera</label>
              <div class="col-md-5">
                <select id="varCarrera" name="varCarrera" class="form-control">
                  <option value="1">Option one</option>
                  <option value="2">Option two</option>
                </select>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="varGeneracion">Generación</label>  
              <div class="col-md-4">
              <input id="varGeneracion" name="varGeneracion" type="text" placeholder="Generación" class="form-control input-md">
              <span class="help-block">Año de ingreso</span>  
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="varsemestre">Generación</label>  
              <div class="col-md-4">
              <input id="varsemestre" name="varsemestre" type="text" placeholder="Semestre" class="form-control input-md">
              <span class="help-block">Semestre</span>  
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="varUsername">Usuario</label>  
              <div class="col-md-5">
              <input id="varUsername" name="varUsername" type="text" placeholder="Nombre de usuario" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="varPassword">Contraseña</label>
              <div class="col-md-5">
                <input id="varPassword" name="varPassword" type="password" placeholder="Contraseña" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="varTipo">Tipo usuario</label>
              <div class="col-md-5">
                <select id="varTipo" name="varTipo" class="form-control">
                  <option value="0">Administrador</option>
                  <option value="1">Estudiante</option>
                  <option value="2">Docente</option>
                </select>
              </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="btnGuardar"></label>
              <div class="col-md-4">
                <button id="btnGuardar" name="btnGuardar" class="btn btn-default">Guardar</button>
              </div>
            </div>
            
            </fieldset>
        </form>            
    </body>
</html>