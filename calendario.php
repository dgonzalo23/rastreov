
<!doctype html>
<html lang="en">
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta de históricos</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="https://eonasdan.github.io/bootstrap-datetimepicker/css/prettify-1.0.css" rel="stylesheet">
  <link href="https://eonasdan.github.io/bootstrap-datetimepicker/css/base.css" rel="stylesheet">
  <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://momentjs.com/downloads/moment.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
  <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?libraries=drawing,places"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">    
</head>
    
<body>
<form>
<div class="container">
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id= 'datetimepicker6' name='datetimepicker6'>
                <input type="text" class="form-control" id='fechainicial' name='datetimepicker6'/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    
     <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker7' name='datetimepicker7'>
                <input type='text' class="form-control" id='fechafinal' name='datetimepicker7'/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    
</div>
    <div id="result"><?php include("actual.php"); ?></div> 

<div class="container">
  <div class='col-md-5'>
    <input type="submit" class="btn btn-default" value="Ver Recorrido" onclick="return chk()">
  </div>
</div>
</form>
<!--<p id="mensaje"></p>-->
<div id="map"></div>
</body>

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
    var matriz;
    var posicionhis;
    var recorrido;
    var myCenter=new google.maps.LatLng(parseFloat(LatitudGPSS),parseFloat(LongitudGPSS));
    
        var map;

        var point;
        map = new google.maps.Map(document.getElementById("map"), {
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
    
    function chk(){
        var fechainicial = document.getElementById('fechainicial').value;
        var fechafinal= document.getElementById('fechafinal').value;
        //var fechafinal = document.getElementById('fechafinal').value;
        //$.post("semilla.php", {fechainicial:fechainicial , fechafinal:fechafinal});
        //var dataString = 'fechainicial='+ fechainicial;
        $.ajax({
            type: "post",
            url: "semilla.php",
            data: {'fechainicial':fechainicial, 'fechafinal':fechafinal},
            cache: false,
            success: function(respuesta){
                matriz = JSON.parse(respuesta);
//                $('#mensaje').html(html);
                for (var k in matriz){
                    console.log(matriz[k].latitud);
                    console.log(matriz[k].longitud);
                    var lathis = parseFloat(matriz[k].latitud);
                    var longhis = parseFloat(matriz[k].longitud);
                    posicionhis = new google.maps.LatLng(lathis,longhis);
                    locations.push(posicionhis);   
                    recorrido.setPath(locations); 
                }
            }
            
        });
        
        return false;
        
        
    }
    

                    
                function CargarDB(){    $('#result').load('actMarker.php'); }




    function doNothing() {}
</script>
</html>