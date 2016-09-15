<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Localizacion Real</title>
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
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> 
<!-- <style>
      #floating-panel {
          position: absolute;
          top: 60px;
          left: 40%;
          z-index: 5;
          background-color: #fff;
          padding: 1px;
          border: 1px solid #999;
          text-align: center;
          font-family: 'Roboto','sans-serif';
          line-height: 20px;
          padding-left: 1px;
        }
    </style>
-->
  </head>
  <title>Localizacion Real</title>
   <body>
<!--
    <script type="text/javascript">
    var latitud = <?php echo $lat ?>;
    var longitud = <?php echo $log ?>;
    </script>
-->
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
        <li><a href="index.php">Home</a></li>
        <li class="active" class="dropdown">
          <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Localizacion <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="lochis.php">Historico</a></li>
            <li class="active"><a href="locrealt.php">Tiempo Real</a></li>
          </ul>
        </li>
<!--        <li><a href="us.php">Nosotros</a></li>-->
      </ul>
    </div>
  </div>
</nav>
    <div id="floating-panel">
        <form>
            <input type="checkbox" onclick="seleccion()" id="checkbox1"> Trazado
            <input type="checkbox" onclick="info()" id="checkbox2"> InfoWindow
            </form>
          
    </div>
    <div class="map-responsive" id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </div>
   
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
  
      <!-- 
<script>
        
    var map;
    var marker;
    var check;
    var infow;
        
    function initMap() {
    
    var point;
    var point2;
    var locations=[];
    var locations2=[];
    var cont=0;
    var cont2=0;
    var length_in_km;
    var length_in_km2;
    map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15
            });
    google.maps.LatLng.prototype.kmTo = function(a){ 
    var e = Math, ra = e.PI/180; 
    var b = this.lat() * ra, c = a.lat() * ra, d = b - c; 
    var g = this.lng() * ra - a.lng() * ra; 
    var f = 2 * e.asin(e.sqrt(e.pow(e.sin(d/2), 2) + e.cos(b) * e.cos 
    (c) * e.pow(e.sin(g/2), 2))); 
    return f * 6378.137; 
    }

    google.maps.Polyline.prototype.inKm = function(n){ 
    var a = this.getPath(n), len = a.getLength(), dist = 0; 
    for (var i=0; i < len-1; i++) { 
       dist += a.getAt(i).kmTo(a.getAt(i+1)); 
    }
    return dist; 
    }
    var infoWindow = new google.maps.InfoWindow({});
    var infoWindow2 = new google.maps.InfoWindow({});
setInterval(function(){
    downloadUrl("actMarker.php", function(data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName("marker");
    for (var i = 0; i < markers.length; i++) {
        point = new google.maps.LatLng(
        parseFloat(markers[i].getAttribute("lat")),
        parseFloat(markers[i].getAttribute("lng")));
        locations[cont]=point;
        map.setCenter(point); 
        var fechahora = markers[i].getAttribute("fechahora");
        var evento = markers[i].getAttribute("evento");
        var htm = "<b>" + "Vehiculo 1" + "</b> <br/>" + point + "</b> <br/>" + fechahora + "<br/><b>" + "Distancia Recorrida (Km)" + "</b> <br/>"+length_in_km;
        var myIcon = {
        url: "http://icons.iconarchive.com/icons/icons-land/transporter/256/Taxi-Top-Yellow-icon.png", //url
        scaledSize: new google.maps.Size(30, 30) };
        if (marker) {
            //if marker already was created change positon
            marker.setPosition(locations[cont]);
        } else {
                //create a marker
            marker = new google.maps.Marker({            position: locations[cont], 
            map: map,
            icon:myIcon
            });
        }
        var lat = point.lat();
        var lng = point.lng();

        if (evento == 1) {
        console.log("push ")
        console.log(evento)               
        $.ajax({
        type: 'POST',
        url: 'server2app.php',
        data: { lat: lat,lng: lng},
        success: function(response) {
        $('#result').html(response);
            }
            });   
        alert('Se ha registrado un Evento'); 
        }
        if (infow == 1) {
        bindInfoWindow(marker, map, infoWindow, htm);
        }
        if (infow == 0) {
            infoWindow.close();
        }
            cont = cont+1;
    }
    
        
    console.log(locations.length);
    if (check == 1)
        { 
        
        recorrido.setMap(map); 
            
        }
    if (check == 0)
        { 
        locations = [];
        //recorrido.setPath(locations);
        recorrido.setMap(null);
        cont = 0;
        console.log("edgardo");
              
        }
    
        recorrido.setPath(locations);   

    length_in_km = recorrido.inKm();
        });
    
    downloadUrl("actMarker2.php", function(data) {
    var xml2 = data.responseXML;
    var markers2 = xml2.documentElement.getElementsByTagName("marker");
    for (var i = 0; i < markers2.length; i++) {
        point2 = new google.maps.LatLng(
        parseFloat(markers2[i].getAttribute("lat")),
        parseFloat(markers2[i].getAttribute("lng")));
        locations2[cont2]=point2;
        map.setCenter(point2); 
        var fechahora2 = markers2[i].getAttribute("fechahora");
        var evento2 = markers2[i].getAttribute("evento");
        var htm2 = "<b>" + "Vehiculo 2" + "</b> <br/>" + point2+ "</b> <br/>" + fechahora2 + "<br/><b>" + "Distancia Recorrida (Km)" + "</b> <br/>"+length_in_km2;
        var myIcon2 = {
        url: "http://icons.iconarchive.com/icons/icons-land/transporter/256/Taxi-Top-Yellow-icon.png", //url
        scaledSize: new google.maps.Size(30, 30) };
        if (marker2) {
            //if marker already was created change positon
            marker2.setPosition(locations2[cont2]);
        } else {
                //create a marker
            marker2 = new google.maps.Marker({            position: locations2[cont2], 
            map: map,
            icon:myIcon2
            });
        }
        var lat2 = point2.lat();
        var lng2 = point2.lng();

        if (evento2 == 1) {
        console.log("push ")
        console.log(evento2)               
        $.ajax({
        type: 'POST',
        url: 'server2app.php',
        data: { lat: lat2,lng: lng2},
        success: function(response) {
        $('#result').html(response);
            }
            });   
        alert('Se ha registrado un Evento'); 
        }
        if (infow == 1) {
        bindInfoWindow2(marker2, map, infoWindow2, htm2);
        }
        if (infow == 0) {
            infoWindow2.close();
        }
            cont2 = cont2+1;
    }
    
        
    console.log(locations2.length);
    if (check == 1)
        { 
        
        recorrido2.setMap(map); 
            
        }
    if (check == 0)
        { 
        locations2 = [];
        //recorrido.setPath(locations);
        recorrido2.setMap(null);
        cont2 = 0;
        console.log("edgardo");
              
        }
    
        recorrido2.setPath(locations2);   

    length_in_km2 = recorrido2.inKm();
        });
    
    }, 1000);
    
    
    
    var recorrido = new google.maps.Polyline({
    path: locations,
    strokeColor: "#FF0000",
    strokeOpacity: 1.0,
    strokeWeight: 2
    });
    
    var recorrido2 = new google.maps.Polyline({
    path: locations2,
    strokeColor: "#FF0000",
    strokeOpacity: 1.0,
    strokeWeight: 2
    });
}

    function seleccion(){
    if (document.getElementById('checkbox1').checked)
        {
          check = 1;
            }
        else
            {
            check = 0;      
            }
            } 
        
    function info(){
    if (document.getElementById('checkbox2').checked){
          infow = 1;
            }
        else{
            infow = 0;      
            }
            } 
        
    function bindInfoWindow(marker, map, infoWindow, htm) {
                infoWindow.setContent(htm);
                infoWindow.open(map, marker);
                    }
    function bindInfoWindow2(marker2, map, infoWindow2, htm2) {
                infoWindow2.setContent(htm2);
                infoWindow2.open(map, marker2);
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
-->
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtxNxHoSNOl8JMvcc4KAIlkoSlURTKL54&callback=initMap"
    async defer>
    </script>
    <script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js">
    </script>
        
        
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

    </div>
  </body>
</html>
