<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
 
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style> -->
</head>
<body>

<h2>Image Hover Fullscreen Zoom</h2>
<p>Hover over the image to see the zoom effect.</p>

<div class="container">
  

    <div class="animated bounce">
  <img src="bs1.png" alt="Avatar" class="image">
</div>
   <h2 class="animated bounceInRight" style="animation-delay: 1s">We Are Reliable</h2>







  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>

</body>
</html>
