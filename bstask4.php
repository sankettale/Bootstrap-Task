<!DOCTYPE html>
<html>
<head>
	<title>task4</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

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
	



	<!-- nav bar -->
	<!-- <header> -->
<div class="container-fluid pb-5" style="background-color: #ef8685;">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand ml-5" href="#" style="color: white;"> Bootstrap</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;">photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;">gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white; background-color: #8291a8;">Free Download</a>
      </li>
    </ul>
  </div>
</nav>
<h1 style="color: white;" class="font-weight-bold ml-5 pb-3">Bootstrap Slider Example</h1>
<a href="#" type="btn" class="btn btn-primary ml-5">Free Download</a>
<a href="#" type="btn" class="btn" style="border: 1px solid white; color: white;">Live Demo</a>
</div>

<!-- carousel -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Bootstrap_Task\task8\s1.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="bstask1.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="bstask11.jpg" alt="New York" width="1100" height="500">
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



<!-- card -->

<div class="container-fluid pb-5" style="background-color: #ef8685;" >
	<h2 class="text-center font-weight-bold" style="color: white;">* MUSIC *</h2>
	<div class="row">
		<div class="col-lg-4" >
			<div class="card">
			<img src="Bootstrap_Task\task8\s1.png" class="img-fluid card-img-top p-3" >	
			<p class="font-weight-bold pl-3">Loreum Ipsum</p>
			</div>
			</div>



			<div class="col-lg-4">
			<div class="card">
				<img src="Bootstrap_Task\task8\s1.png" class="img-fluid card-img-top p-3" >
				<p class="font-weight-bold pl-3">Loreum Ipsum</p>
			</div>
			</div>



			<div class="col-lg-4">
			<div class="card">
				<img src="Bootstrap_Task\task8\s1.png" class="img-fluid card-img-top p-3" >
				<p class="font-weight-bold pl-3">Loreum Ipsum</p>
			</div>
			</div>
	</div>
</div>
</header>

<!-- footer -->
<footer>
	<div class="container-fluid bg-dark">
		<div class="row">
			<div class="col-lg-4">
				<div class="text-center">
					<ul  style="color: gray; list-style-type: none;">Links					    
					    <li>Home</li>
					    <li>About</li>
					    <li>Contact us</li>
					    <li>services</li>
					</ul>
				</div></div>


					<div class="col-lg-4 pt-4">
					<div class="text-center">
						<h3 style="color: gray;">Connect With Us</h3>
						<p style="color: gray;">loreum ipsum Lorem ipsum dolor sit amet, consectetur</p>
					</div></div>



					<div class="col-lg-4 pt-4">
					<div class="text-center">
						<h3 style="color: gray;">Subscribe</h3>
						<input type="email" name="" placeholder="Enter your Email ">
						<button type="submit">Submit</button>
					</div></div>
		</div>
	</div>
</footer>

<!-- Footer -->
<div class="container-fluid bg-light">
	<div class="row">
		<div class="col-lg-12">
			<p class="text-center">Copyright@ your website 2019</p>
		</div>
	</div>
</div>
</body>
</html>