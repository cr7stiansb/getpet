<?php
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $page = isset($_GET['page']) ? $_GET['page'] : '';
	if ($id != "" && $page == "fichaanimal"){
        include("modelo/conexion.php");
        $consulta = "SELECT * FROM adopcion where id = $_GET[id]";
		$aconsulta = mysqli_query($link, $consulta);
        $datos = mysqli_fetch_array($aconsulta);
        echo "<div class='col-xs-9 col-xs-offset-1'>
              <div class='thumbnail'>
                  <img style='' src='imagenes/$datos[foto]'>
                  <div class='caption'>
                    <p><strong>Edad: </strong>$datos[edad]</p>
                    <p><strong>Vacunado: </strong>$datos[vacunado]</p>
                    <h3>Descripcion</h3>
                    <p style=''> $datos[descripcion]</p>
                    <button class='btn btn-danger' name='Adopta' data-toggle='modal' data-target='#adoptar' id='btnadoptar'>Adopta</button>
                </div>
            </div>
        </div>";
    }
?>
 