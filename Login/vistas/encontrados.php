<h1>Encontrados</h1>
<h4>Has encontrado una mascota? publicalo acá.</h4>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-complete btn-sm pull-left" data-toggle="modal" data-target="#ingresar_mascota_encontrada">Ingresa la mascota que has encontrado</button>



<!-- Modal -->
<div id="ingresar_mascota_encontrada" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">Has perdido alguna mascota, publicalo aca y haremos lo posible.</h4>
      </div>
      <div class="modal-body">
        <form action="modelo/animalencontrado.php" method="POST" class="form-vertical" enctype="multipart/form-data">
            <div class="control-group">
                <label class="control-label">Lugar</label>
                <input class="form-control" id="lugar" type="text" name="lugar" />
            </div>
            <div class="control-group">
                <label class="control-label">Fecha yy/mm/dd</label>
                <input class="form-control" type="date" name="fechaperdida" placehoder="mm/dd/yy" />
            </div>
            <div class="control-group">
                <label class="control-label">Raza</label>
                <input class="form-control" type="text" name="raza" />
            </div>
            <div class="form-group">
                <label class="control-label">Foto</label>
                <input type="file" class="" name="animalperdido" id="">
            </div>
            <div class="form-group">
                <label class="control-label">Descripcion</label>
                <textarea type="text" class="form-control" name="descripcion" placeholder="Ingrese descripcion" cols="20" rows="6"  required> </textarea> 
            </div>
            <input class="btn btn-complete center-block" type="submit" value="Registrar" />
        </form>
      </div>
      <div class="modal-footer">
        <h4 class="text-center">Al compartir a una mascota estraviada, estas siendo mas humano! </h4>
      </div>
      
    </div>

  </div>
</div>
<br><br><br>
<div class="row-fluid">
  <div>
     <?php
      include("modelo/conexion.php"); 
      $anim = "SELECT * FROM animales WHERE tipo_mascota = 'encontrado'";
      $vanim = mysqli_query($link, $anim);
      while($noanimales = mysqli_fetch_assoc($vanim)){?>

      <div class="col-sm-3">
          <div class="thumbnail">
              <img style="widht: 200px; height: 200px;" src="imagenesanimales/<?php echo $noanimales['foto']; ?>">
              <div class="caption">
                <p><strong>Lugar: </strong><?php echo $noanimales['lugar']; ?></p>
                <p><strong>Raza: </strong><?php echo $noanimales['raza']; ?></p>                
                <p><strong>Fecha: </strong><?php echo $noanimales['fecha']; ?></p>
                <h3>Descripcion</h3>
                <p style="overflow:hidden; white-space:nowrap; text-overflow: ellipsis;"><?php echo $noanimales['descripcion']; ?></p>
                <a class="btn btn-complete" href="index.php?page=fichaanimalencontrado&id=<?php echo $noanimales['id'] ?>"><button class="btn btn-complete">Ver más</button></a>
          </div>
      </div>
  </div>
  <?php } ?>  
</div>    
