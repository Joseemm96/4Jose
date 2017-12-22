@extends('layout.app')

@section('content')


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{url('/img/fullstack.jpg')}}" alt="Image"/>
      <div class="carousel-caption">
        <h3>Developer FullStack</h3>
        <p>Conoce lo que necesitas para ser un desarrollador fullstack!</p>
      </div>
    </div>

    <div class="item">
      <img src="{{url('/img/javascript.jpg')}}" alt="Image"/>
      <div class="carousel-caption">
        <h3>Javascript</h3>
        <p>Aprende sobre uno de los lenguajes más importantes en el entorno web.</p>
      </div>
    </div>

    <div class="item">
      <img src="{{url('/img/sass.png')}}" alt="Image"/>
      <div class="carousel-caption">
        
        <p>Uno de los mejores preprocesadores para CSS</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<hr>	

   <div class="container">	
    <div class="col-sm-12"> 
      <h1 style="text-align: center">Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  
    
    </div>
    <div class="col-sm-4">	

    </div>
   </div>

   <hr>

   <br>

<div class="container-fluid bg-3 text-center">
<div class="row">
	<div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure facere eos eveniet, debitis numquam, impedit voluptatum. Accusantium repellendus, error ut? Quaerat eveniet in labore cumque perferendis sint dolore asperiores. Culpa.</div>
	<div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt animi nemo necessitatibus nam placeat molestias labore laudantium dolores, distinctio cum laborum? Ex fugit aliquid itaque eius, pariatur doloremque animi maxime.</div>
	<div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo assumenda deserunt corporis fugit natus animi quibusdam ab voluptate aperiam est! Quaerat labore ipsam deserunt impedit asperiores porro quibusdam culpa exercitationem.</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


@endsection