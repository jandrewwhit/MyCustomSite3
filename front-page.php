<?php get_template_part('partials/head'); ?>
<html>
  <body <?php body_class(); ?>>
<?php get_template_part('partials/header'); ?>
<div class="container-override">

<img class="img-fluid" src="../images/xmen_wall.jpg">
<!--https://image.tmdb.org/t/p/original/oQWWth5AOtbWG9o8SCAviGcADed.jpg-->
<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://image.tmdb.org/t/p/original/6aUWe0GSl69wMTSWWexsorMIvwU.jpg" alt="First slide">
    </div>
    <div class="carousel-item text-center">
      <img class="d-block img-fluid" src="https://image.tmdb.org/t/p/original/uU1Mt4JWhDvl4vKb3AfxNsorkoM.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://image.tmdb.org/t/p/original/bnL8IlGIkEsbZd1n63n3Ao08cFv.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->
<!--<div id="my-caro" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#my-caro" data-slide-to="0" class="active"></li>
    <li data-target="#my-caro" data-slide-to="1"></li>
    <li data-target="#my-caro" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://image.tmdb.org/t/p/original/6aUWe0GSl69wMTSWWexsorMIvwU.jpg" alt="First slide">
    </div>
    <div class="carousel-item text-center">
      <img class="d-block img-fluid" src="https://image.tmdb.org/t/p/original/uU1Mt4JWhDvl4vKb3AfxNsorkoM.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://image.tmdb.org/t/p/original/bnL8IlGIkEsbZd1n63n3Ao08cFv.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#my-caro" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#my-caro" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->


</div>
<?php the_posts_navigation(); ?>

<?php get_template_part('partials/footer'); ?>

  </body>
</html>