<!DOCTYPE html>
<html lang="en">
<head>
	<title>Services</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">  
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Vegur_500.font.js" type="text/javascript"></script>
	<script src="js/Ropa_Sans_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script> 
	<script src="js/script.js" type="text/javascript"></script> 
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
 		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page3">
	<!--==============================header=================================-->
	<header>
		<div class="border-bot">
			<div class="main">
				<h1><a href="index.html">Global Tracking System</a></h1>
				<nav>
					<ul class="menu">
						<li><a class="active" href="index.php">Home</a></li>
						<li><a href="index-1.php">Tiempo real</a></li>
						<li><a href="index-2.php">Tiempo real con polilinea</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
	</header>
	
	<!--==============================content================================-->
	<!--<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>What We Offer</h3>
						<h6 class="prev-indent-bot">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </h6>
						<p class="p2">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
						<p class="p3"><a class="link-1" href="#">Read More</a></p>
						<h3 class="prev-indent-bot">Special Events</h3>
						<div class="wrapper p3">
							<figure class="img-indent"><img src="images/page3-img1.jpg" alt=""></figure>
							<div class="extra-wrap">
								<h6 class="p1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</h6>
								<p class="p1">Labore et dolore magna aliquyam erat, sed diam voluptua at vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
								<a class="link-1" href="#"> Read More</a>
							</div>
						</div>
						<div class="wrapper">
							<figure class="img-indent"><img src="images/page3-img2.jpg" alt=""></figure>
							<div class="extra-wrap">
								<h6 class="p1">Rem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</h6>
								<p class="p1">Jnvidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum no sea takimata sanctus est.</p>
								<a class="link-1" href="#"> Read More</a>
							</div>
						</div>
					</article>
					<article class="grid_4">
						<div class="indent-left">
							<h3 class="prev-indent-bot">New Service</h3>
							<figure class="p2"><img src="images/page3-img3.jpg" alt=""></figure>
							<p class="prev-indent-bot">Vel eum iriure dolor in hendrerit tumzril delenit augue duis dolore.</p>
							<p class="margin-bot"><a class="link-1" href="#">View More</a></p>
							<h3 class="p1">Our Services</h3>
							<ul class="list-1">
								<li><a href="#">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</a></li>
								<li><a href="#">Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </a></li>
								<li><a href="#">At vero eos et accusam et justo duo dolores et ea rebum.</a></li>
								<li><a href="#">Stet clita kasd gubergren, no sea</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</a></li>
								<li><a href="#">Nonumy eirmod tempor invidunt ut labore et dolore magna.</a></li>
							</ul>
							<a class="link-1 margin-left" href="#">Read More</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>-->

<style>
      html, body {
        height: 100%;
        margin: 0;
      }
      #map {
        height: 100%;
        width: 100%;
      } 
    </style>


	<div id="map">
    <script>
        
             var map;
function initMap() {
    
    var point;
    var locations = new Array();
    map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15
            });

setInterval(function(){
    downloadUrl("dynamicdb.php", function(data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName("marker");

    
    for (var i = 0; i < markers.length; i++) {
        point = new google.maps.LatLng(
        parseFloat(markers[i].getAttribute("lat")),
        parseFloat(markers[i].getAttribute("lng")));
        map.setCenter(point);
          }



        if(locations[0]==null){
        locations[0]=point;
        }else {      
         var f=locations.length;
         locations[0+f]=point;
        }

  

    var myIcon = {
     url: "http://icons.iconarchive.com/icons/chicho21net/little-trucks/512/City-Truck-blue-icon.png", //url
     scaledSize: new google.maps.Size(30, 30) };

var marker = new google.maps.Marker({
    position: locations[0+f],
    icon:myIcon,
    map: map
  });


var recorrido = new google.maps.Polyline({
    path: locations,
    strokeColor: "#FF0000",
    strokeOpacity: 1.0,
    strokeWeight: 2
    });



    recorrido.setMap(map);
    });
    }, 1000);
}

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;
        request.onreadystatechange = function() {
            if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
            }
        };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
  </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtxNxHoSNOl8JMvcc4KAIlkoSlURTKL54&callback=initMap"
    async defer></script>
    <script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </div>
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container-fluid">
            <div class="row">
                    <p class="navbar-text"><script language="javascript">
                        document.write(point());
                        </script></p> 
            </div>
        </div>
    </div>
	
	<!--==============================footer=================================-->
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_3">
						<div class="spacer-1">
							<a href="index.php"><img src="images/logo1.png" alt=""></a>
						</div>
					</div>
					<div class="grid_5">
						<div class="indent-top2">
							<p class="prev-indent-bot">&copy; 2016 Proyecto 2 by Cristian Camargo, Gonzalo Duarte y Guido Mercado</p>
							Phone: +1 800 559 6580 Email: <a href="#">Cristianq@uninorte.edu.co</a>
						</div>
					</div>
					<div class="grid_4">
						<ul class="list-services">
							<li><a class="item-1" href="#"></a></li>
							<li><a class="item-2" href="#"></a></li>
							<li><a class="item-3" href="#"></a></li>
							<li><a class="item-4" href="#"></a></li>
						</ul>
						<span class="footer-text">&copy; 2016 <a class="link color-2" href="#">Privacy Policy</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
