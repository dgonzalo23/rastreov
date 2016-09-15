<!DOCTYPE html>
<html>
    <head>
        <title>Recorrido Historico</title>


        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="https://eonasdan.github.io/bootstrap-datetimepicker/css/prettify-1.0.css" rel="stylesheet">
        <link href="https://eonasdan.github.io/bootstrap-datetimepicker/css/base.css" rel="stylesheet">
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript" src="http://momentjs.com/downloads/moment.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?libraries=drawing,places"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <link rel="stylesheet" href="styles.css">
       <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> 

        <!-- Permite ver el calendario-->
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <!--Permite conectarse con la base de datos-->
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--Boton Ver recorrido-->       
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- centra el mapa cuando noo hay historico-->
        <script type="text/javascript" src="http://momentjs.com/downloads/moment.js"></script>
        <!--Selecciona el calendario-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <!--calendario-->
        <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        <!--API-->
        <script src="https://maps.googleapis.com/maps/api/js?libraries=drawing,places"></script>
        <!--web response-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link rel="stylesheet" href="styles.css">
	    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> 
        <!--Estilo Ver recorrido-->
        <style>        
            #floating-panel {
              position: absolute;
              top: 10px;
              left: 90%;
              z-index: 5;
              
              background-color: #fff;
              padding: 0px;
              border: 0px solid #999;
              text-align: center;
              font-family: 'Roboto','sans-serif';
              line-height: 10px;
              padding-left: 0px;
            }
        </style>
    </head>
    <title>Rastreo Satelital</title>
    <body>
        <!-- estilo de rastreo satelital-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="nav">
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
                            <li class="active"><a href="lochis.php">Historico</a></li>
                            <li><a href="locrealt.php">Tiempo Real</a></li>
                            <li>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="panel panel-default" id="panel">
            <div class="panel-body">
                <form>
            <div class='col-xs-6'>
               <div class="form-group">
                <div class='input-group date' id= 'datetimepicker6' name='datetimepicker6'>
                    <input type="text" class="form-control" id='fechainicial' name='datetimepicker6'/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
               </div>
            </div>
            <div class='col-xs-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker7' name='datetimepicker7'>
                        <input type='text' class="form-control" id='fechafinal' name='datetimepicker7'/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            
        <div class='col-xs-6' id="result"><?php include("actual.php"); ?></div>
        </form>
    </div>
<div id="floating-panel">
        <form>
            <input type="submit" class="btn btn-default" value="Ver Recorrido" onclick="return chk()">
            </form>      
    </div> 
</div>
    <div class="panel panel-default" id="panel11">
    <div class="panel-body">
  
        </div>
        </div>
    <div class="map-responsive" id="map1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
       <!--formato del calendario-->
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker({

          locale: "es",
          format: "YYYY-MM-DD HH:mm:ss"
         
        });
        $('#datetimepicker7').datetimepicker({
 
            locale: "es",
            format: "YYYY-MM-DD HH:mm:ss"
            
        });
        
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            //var id1 = $(this).attr("id");
        });
        
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            //var id2 = $(this).attr("id");
        });
    });
</script>
        
        
<script>
    var locations = [];
    var idmin;
    var idmax;
    var idmin2;
    var idmax2;
    var matriz;
    var tamano;
    var posicionhis;
    var recorrido = null;
    var selection;
    var lati;
    var long;
    var fechor;
    var marcadoractual;
    var marker = [];
    
    var myCenter=new google.maps.LatLng(parseFloat(LatitudGPSS),parseFloat(LongitudGPSS));
    
    var map;

    var point;
          <!-- -->
        map = new google.maps.Map(document.getElementById("map1"), {
            zoom: 15,
            center: myCenter    
        });
                
        recorrido = new google.maps.Polyline({
            path: locations,
            strokeColor: "#FF0000",
            strokeOpacity: 1.0,
            strokeWeight: 2
        });
    
        recorrido.setMap(map);
           <!---->
        function chk(){
        var contador = 0;    
            if (contador == 0) {
                recorrido.setPath([]);
                contador = 1;
                locations = [];
            if (contador == 1) {
            var fechainicial = document.getElementById('fechainicial').value;
            var fechafinal= document.getElementById('fechafinal').value;
            $.ajax({
                type: "post",
                //llamar archivo semilla 
                url: "semilla.php",
                data: {'fechainicial':fechainicial, 'fechafinal':fechafinal},
                cache: false,
                success: function(respuesta){
                    matriz = JSON.parse(respuesta);
                    tamano = matriz.length;

                        for (var k in matriz){
                            var lathis = parseFloat(matriz[k].lat);
                            var longhis = parseFloat(matriz[k].lng);
                            posicionhis = new google.maps.LatLng(lathis,longhis);
                            locations.push(posicionhis);   
                            recorrido.setPath(locations); 
                        }
                    map.setCenter(locations[0]);
                    map.setZoom(15);
                }
            });
            console.log(contador);
            }}
            return false;
        }
    

    //    function clear(){
      //      recorrido.setMap(null);
        //}  
    
        //function CargarDB(){    $('#result').load('actual.php'); }
</script>
         
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </div>
    
  </body>
</html>
