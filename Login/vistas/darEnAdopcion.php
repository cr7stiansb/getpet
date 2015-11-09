<h1>Dar en adopcion</h1>

<h4 class="modal-title">Digite el siguiente formulario para registrar un animal en adopción.</h4><br>
<div class="container">
  <div class="" style="margin-right: 600px;">   
    <form action="modelo/adopcion.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
              <input type="text" class="form-control" name="nombre" placeholder="Ingresa Nombre">
        </div><br>
        <div class="form-group">
              <input type="text" class="form-control" name="edad" placeholder="Ingresa edad">
        </div><br>
        <div class="form-group">
              <input type="text" class="form-control" name="raza" placeholder="Ingresa Raza">
        </div>
        <div class="">
                <label for="">Vacunado: </label>
              Si<input type="radio" class="fakeRadio" name="vacuna" value="si">
              NO<input type="radio" class="fakeRadio" name="vacuna" value="no">
        </div>
        <div class="">
              <textarea type="text" class="" name="descripcion" placeholder="Enter descripcion" cols="20" rows="6"> </textarea> 
        </div>
        <hr class="">
       
        <div >
              <input type="file" class="" name="upload" id="upload">
        </div><br>

     <input class="button btn-default btn-sm" type="submit" id="enviar" value="Registrar">
    </form> 
  </div>
</div>
  

 
