<?php
include_once("D:/Xamp/htdocs/phpPuro/PoemaBD(21-05)/Controller/mostrar_poema.php");
?>
<div class="container py-5 justify-content-center text-center">
  <div class="row">
    <h1>Poemas Cortos</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php foreach($poemas as $poema) { ?>
        <div class='col'>
          <div class='card'>
            <div class='d-flex justify-content-center py-3'>
              <img src='https://cdn-icons-png.flaticon.com/512/2505/2505742.png' style='width: 200px' class='' alt=''>
            </div>
            <div class='card-body'>
              <p class='card-text'>
                <h1><?php echo $poema["titulo"]; ?></h1>
                Autor: <?php echo $poema["autor"]; ?><br>
                Fan: <i><?php echo $poema["nombre_usuario"]; ?></i><br>
                <div class="py-2">
                  <button type='button' class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#staticBackdrop<?php echo $poema["id_poema"]; ?>'>Ver Más</button>
                  <button type='button' class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#mdlEliminacion<?php echo $poema["id_poema"]; ?>'>X</button>
                </div>
              </p>
            </div>
          </div>

          <!-- Modal Ver Más -->
          <div class='modal fade' id='staticBackdrop<?php echo $poema["id_poema"]; ?>' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='staticBackdropLabel'><?php echo $poema["titulo"]; ?></h5>
                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                  <?php echo $poema["poema"]; ?>
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Eliminar -->
          <div class='modal fade' id='mdlEliminacion<?php echo $poema["id_poema"]; ?>' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'>Eliminar</h5>
                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                  ¿Está seguro que desea eliminar el Poema?
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                  <button type='button' class='btn btn-danger'>Eliminar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="py-3">
    <button type="button" class="btn btn-primary px-5">Nuevo Poema</button>
  </div>
</div>



