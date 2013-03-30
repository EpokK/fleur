@extends('layouts.master')

@section('content')

<!-- Carousel ================================================== -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ URL::to('img/caroussel1.png') }}" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Creer votre propre bouquet</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Sign up today</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="{{ URL::to('img/caroussel1.png') }}" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Learn more</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="{{ URL::to('img/caroussel1.png') }}" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="span4">
      <img class="img-circle" src="{{ URL::to('img/bouquet1.png') }}">
      <h2>Bouquet</h2>
      <p>Le mot « bouquet » admet plusieurs étymologies différentes, le sens le plus courant étant construit sur la racine du mot « bois » comme assemblage de végétaux. Son sens est restreint par concurrence avec le mot « bosquet », mais il admet ensuite un certain nombre de sens spécialisés.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <img class="img-circle" src="{{ URL::to('img/bouquet1.png') }}">
      <h2>Composition</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <img class="img-circle" src="{{ URL::to('img/bouquet1.png') }}">
      <h2>Plante</h2>
      <p>Les plantes (Plantae Haeckel, 1866) sont des êtres multicellulaires à la base de la chaîne alimentaire. Elles forment l'une des subdivisions (ou règne) des Eucaryotes. Elles sont, classiquement, avec les algues (y compris les cyanobactéries) et les champignons, l'objet d'étude de la botanique1 . Leur nombre est difficile à déterminer, mais à la date de 2010, il existerait entre 300 000 et 315 000 espèces de plantes connues, dont la grande majorité, entre 260 000 et 290 000, seraient spermatophytes2.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image pull-right" src="{{ URL::to('img/logo.png') }}">
    <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image pull-left" src="{{ URL::to('img/logo.png') }}">
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image pull-right" src="{{ URL::to('img/logo.png') }}">
    <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->


  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>

</div><!-- /.container -->

@stop