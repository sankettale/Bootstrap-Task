<!DOCTYPE html>
<html>
<head>
	<title>bstask1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min3.css">
	
</head>
<style>

	.container-fluid{
		padding:0;
	}
	.jumbotron{
		height: 670px;
		width: 100%;

	}

	a{
		margin-right: 60px;
}
	

</style>

<body>

	<div class="container-fluid">

		<div class="row">

			<div class="jumbotron">


<!-- img -->

			<div class="col-xs-6">
		<img class="img-responsive img-fluid " src="bs1.png" alt="bstask" style="height: 600px; width: 700px">
		</div>



<!-- form -->

	<div class="col-xs-6">

		<form action="/action_page.php">
			
			<div class="text-center font">
					<h2>Login To Continue</h2>
							</div><br>

  <div class="form-group">
   		 <input type="email" class="form-control input-lg  " id="email" placeholder="Email" >
  </div>
  
  <div class="form-group">
    	<input type="password" class="form-control input-lg" id="pwd" placeholder="Password">
  </div>
  
  <div class="checkbox">
   		 <label><input type="checkbox"> Remember me</label>
   			 <label class="text-right b" >
    	<a href="bstask1.php">Forget Password?</a>
  </div>
  
 		 <button type="submit" class="btn btn-primary btn-block">Submit</button>
  
 </form>
</div>



</div>
	</div>
</div>


</body>
</html>