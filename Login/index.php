<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
                
        <!-- Styles -->
        <link rel="stylesheet" href="Css/styles.css">
        
        <!-- Boostrap -->
        <link rel="stylesheet" href="Css/bootstrap.css">
        <link rel="stylesheet" href="Css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="Css/bootstrap.min.css">
        
        
        <!-- Responsive -->
        <link rel="stylesheet" href="Css/responsive.css">
        
        <!-- Awesome 
        <link rel="stylesheet" href="Css/font-awesome.css">-->
                
        <!-- Carrusel -->
        <link rel="stylesheet" href="Css/carrusel.css">        
        
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <title>Login</title>
        
    </head>  
<body id="body">

<div class="page-wrapper"><?php include ("menu.php"); ?></div>


<div class="bs-example"><?php include ("carrusel.php"); ?></div>

<div class="row-fluid"><?php include ("menu2.php"); ?></div>

<div class="row-fluid">
    <div class="col-md-offset-3">
    <?php
            $page = isset($_GET['page']) ? $_GET['page'] : '';

            $patrRango = "/[fichaanimal]/";
            $cadena = $page;
            if (preg_match($patrRango, $cadena)) {
                include('vistas/fichaanimal.php');
            }
            
            switch($page){
                case 'perdidos':
                    include('vistas/perdidos.php');
                break;
                case 'encontrados':
                    include('vistas/encontrados.php');
                break;
                 case 'adoptar':
                    include('vistas/adoptar.php');
                break;
                case 'darEnAdopcion':
                    include('vistas/darEnAdopcion.php');
                break;
            }

            

            ?>
    </div>
</div>

<!-- Footer -->
<footer id="footer" > 
    <div id="pie"> 
       <h1 class="logo navbar-brand" id="logo">
            <a href="index.php" title="Get Pet">
                <img style="" src="img/logo.png" alt="Get Pet" />
            </a>
        </h1>
        <a href="#" class="scrollToTop pull-right" id="back-to-top" style="color: white;" title="Roll back"><i class=" glyphicon glyphicon-chevron-up circle"></i></a>
        <span><p id="name" class="pull-right">©2015 Asociación GETPET</p></span>
        
    </div>
    
</footer>
    
<script>
//Scroll-to-top
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    }); 
})
    
</script>
     
</body>
    

</html> 