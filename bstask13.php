<!DOCTYPE html>
<html>
<head>
  <title>task4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<style>
      .carousel-inner img {
    width: 100%;
    height: 600px;
  }

  </style>
</head>
<body>

<!-- carousel -->

<div id="myCarousel" class="carousel slide carousel-fade carousel-animate carousel-bg" data-ride="carousel" data-interval="2000"  data-keyboard="true">
  
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bs1.png" alt="Los Angeles" width="1100" height="500">
          <div class="carousel-caption">
           <div class="zoomInDown animated">
           <h3 class="text-dark fadeInLeft animated">Hii</h3>
            <h4 class="text-dark slideInRight animated">Hello World</h4>
            <a href="#" type="button" class="btn btn-primary bounceInUp animated">See Details</a>
          </div>
        </div>
      </div>



    <div class="carousel-item">
      <img src="bstask1.jpg" alt="Chicago" width="1100" height="500">
       <div class="carousel-caption">
            <div class="slideOutUp animated">
            <h3 class="text-danger ">Hii</h3>
            <h4 class="text-danger">Hello World</h4>
            <a href="#" type="button" class="btn btn-primary">See Details</a>
          </div>
        </div>
          </div>    




    <div class="carousel-item">
      <img src="bstask11.jpg" alt="New York" width="1100" height="500">

 <div class="carousel-caption">
  <div class="rotateInDownLeft animated">
            <h3 class="text-warning">Hii</h3>
            <h4 class="text-warning">Hello World</h4>
            <a href="#" type="button" class="btn btn-primary">See Details</a>
          </div>
        </div>    
  </div>


  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>

