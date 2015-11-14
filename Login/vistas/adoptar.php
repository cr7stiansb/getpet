<!-- Modal Adoption -->
<div class="modal fade" id="adoptar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Formulario de adopcion</h4>
      </div>
      <div class="modal-body col-md-offset-2" style="margin-right: 100px;">
        <form  action="validar.php" method="post" class="form-vertical">
           <h3 class="text-center">Agrega los campos para ponernos en contactos con usted</h3>
            <div class="form-group">
                <label for="" class="control-laber">Nombre</label>
                <input style="" class="form-control" type="text" name="nombre" placeholder="Nombre">
            </div><br>               
            <div class="form-group">
                <label for="" class="control-laber">Apellidos</label>
                <input style="" class="form-control" type="text" name="apellidos" placeholder="Apellidos">
            </div><br>
            <div class="form-group">
                <label for="" class="control-laber">Telefono</label>
                <input style="" class="form-control" type="text" name="telefono" placeholder="Telefono">
            </div><br>
            <div class="form-group">
                <label for="" class="control-laber">Email</label>
                <input style="" class="form-control" type="text" name="email" placeholder="Email">
            </div><br>
            <input  class="btn btn-primary center-block" type="submit" value="Enviar Datos">               
        </form>
      </div>
      <div class="modal-footer">
          <p class="text-info text-center">No compre, Adoptar es la mejor opción. <a href="#">GetPet</a> Es la solución.</p>
      </div>
    </div>
  </div>
</div>


<div id="dog" class="">
    <h1>Adoptar.</h1>
    <h4>Animales en adopcion.</h4>

         <div class="row-fluid">
            <div>
               <?php
                include("modelo/conexion.php"); 
                $anim = "SELECT * FROM adopcion";
                $vanim = mysqli_query($link, $anim);
                while($noanimales = mysqli_fetch_assoc($vanim)){?>

                  <div class="col-sm-3">
                      <div class="thumbnail">
                          <img style="widht: 200px; height: 200px;" src="imagenes/<?php echo $noanimales['foto']; ?>">
                          <div class="caption">
                            <p><strong>Edad: </strong><?php echo $noanimales['edad']; ?></p>
                            <p><strong>Vacunado: </strong><?php echo $noanimales['vacunado']; ?></p>
                            <h3>Descripcion</h3>
                            <p style="overflow:hidden; white-space:nowrap; text-overflow: ellipsis;"><?php echo $noanimales['descripcion']; ?></p>
                            <button class="btn btn-danger" name="Adopta" data-toggle="modal" data-target="#adoptar" id="btnadoptar">Adopta</button>
                            <a class="btn btn-complete" href="index.php?page=fichaanimal&id=<?php echo $noanimales['id'] ?>"><button class="btn btn-complete">Ver más</button></a>
                          </div>
                        </div>
                  </div>
                  <?php } ?>  
              </div>    
        </div>
  </div>
    