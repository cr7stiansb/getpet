<?php 
$id = isset($_GET['id']) ? $_GET['id'] : '';
$page = isset($_GET['page']) ? $_GET['page'] : '';
    if($id != "" && $page == "fichaanimalperdido"){
        include("modelo/conexion.php");
        $consulta = "SELECT * FROM animales where id = $_GET[id]";
		$aconsulta = mysqli_query($link, $consulta);
        $datos = mysqli_fetch_array($aconsulta);
        
      echo "<div class='col-xs-9 col-xs-offset-1'>
          <div class='thumbnail'>
              <img style='widht: 200px; height: 200px;' src='imagenesanimales/$datos[foto]'>
              <div class='caption'>
                <p><strong>Edad: </strong> $datos[lugar] </p>
                <p><strong>Edad: </strong> $datos[raza] </p>                
                <p><strong>Edad: </strong> $datos[fecha] </p>
                <h3>Descripcion</h3>
                <p style=''> $datos[descripcion]</p>
                <a class='btn btn-complete' href='index.php?page=fichaanimalencontrado&id= $datos[id] '><button class='btn btn-complete'>Ver más</button></a>
          </div>
      </div>
  </div>";
 } 

?>