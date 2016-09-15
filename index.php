<!DOCTYPE html>
<html>
  <head>
    <title>Rastreo Satelital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="http://www.example.com/myicon.ico"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> 
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    </head>
  <title>Rastreo Satelital</title>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Global tracking system</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Localizacion <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/RastreoSatelital/lochis.php">Historico</a></li>
            <li><a href="/RastreoSatelital/locrealt.php">Tiempo Real</a></li>
          </ul>
        </li>
<!--        <li><a href="us.php">Nosotros</a></li>-->
      </ul>
    </div>
  </div>
</nav>
   <div class="container" id="cont">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

     <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <!-- Footer -->
		<footer class="footer-distributed">
           <div class="container-fluid">
			<div class="footer-left">

				<h3><img class="footer-image" src="/RastreoSatelital/logo.png" id ="logo"></h3>
                <p> </p>
                <p> </p>
				<p class="footer-company-name">&copy;    Copyright 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Universidad del Norte</span> Barranquilla, Colombia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+57 3004949290</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:dgonzalo@uninorte.edu.co">dgonzalo@uninorte.edu.co</a></p>
				</div>

			</div>

			<div class="footer-left">

				<p class="footer-company-about">
					<span>Acerca de iTrack</span>
					iTrack una compania de origen colombiano, se encarga del rastreo vehicular en tiempo real destacandose por la confiabilidad y precision.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>
            </div>
		</footer>
  </body>
</html>