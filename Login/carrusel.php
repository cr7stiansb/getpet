<!-- Carousel -->
<style type="text/css">
.carousel{
    background: #2f4357;
    margin-top: 20px;
    width: 100%;
    height: 400px;
}
.carousel .item img{
    margin: 0 auto;
}
.bs-example{
    margin: 20px;
}
</style>

<div id="Carousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
            <li data-target="#Carousel" data-slide-to="3"></li>
        </ol>   
        
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/leon.jpg" alt="Leon">
            </div>
            <div class="item">
                <img src="img/jirafa.jpg" alt="Jirafa">
            </div>
            <div class="item">
                <img src="img/lp.jpg" alt="LP">
            </div>
            <div class="item">
                <img src="img/elefante.jpg" alt="Fondo">
            </div>
        </div>
        
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#Carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#Carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
</div>
