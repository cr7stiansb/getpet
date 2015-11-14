<?php 
$id = isset($_GET['id']) ? $_GET['id'] : '';
$page = isset($_GET['page']) ? $_GET['page'] : '';
    if($id != "" && $page == "fichaanimalencontrado"){
        include("modelo/conexion.php");
        $consulta = "SELECT * FROM animales WHERE id = $id";
		$aconsulta = mysqli_query($link, $consulta);
        $datos = mysqli_fetch_array($aconsulta);
      echo "<div class='col-xs-9 col-xs-offset-1'>
          <div class='thumbnail'>
              <img style='widht: 200px; height: 200px;' src='imagenesanimales/$datos[foto]'>
              <div class='caption'>
                <p><strong>Lugar: </strong> $datos[lugar] </p>
                <p><strong>Raza: </strong> $datos[raza] </p>                
                <p><strong>Fecha: </strong> $datos[fecha] </p>
                <h3>Descripcion</h3>
                <p style=''> $datos[descripcion]</p>
          </div>
      </div>
  </div>";
 } 

?>