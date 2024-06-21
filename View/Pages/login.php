<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-lg-6 p-5">
          <form class="p-4 bg-light border border-2 rounded border-success" action="Controller/validacion.php" method="POST">
              <h1 class="d-flex justify-content-center">Inicia sesión:</h1>
              <p> Si aún no tienes tu cuenta, puedes crearla en <a class="text-danger" href="index.php?page=register">este enlace.</a></p>
              <div class="mb-3">
                <label for="txtUsuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="txtUsuario" name="usuario" placeholder="usuario">
              </div>
              <div class="mb-3">
                <label for="txtContrasenia" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="contrasenia" id="txtContrasenia" placeholder="contraseña">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Ingresar</button>
              </div>
            <?php  
              if (isset($_SESSION['errorLogin'])) {
                
            }
            ?>
          </form>
      </div>
  </div>
</div>