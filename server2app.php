<?php
    require("dbinfo.php");
    $connection=mysql_connect ($servername, $username, $password);
    if (!$connection) {
      die('Not connected : ' . mysql_error());
    }

    // Set the active MySQL database
    $db_selected = mysql_select_db($dbname, $connection);
    if (!$db_selected) {
      die ('Can\'t use db : ' . mysql_error());
    }

    // Select all the rows in the markers table
    $query = "SELECT regid FROM regid WHERE usuario = 'edgardo'";
    $resultado = mysql_query($query);
    if (!$resultado) {
      die('Invalid query: ' . mysql_error());
    }
    $row = mysql_fetch_assoc($resultado);
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    // Replace with the real server API key from Google APIs
    $apiKey = "AIzaSyAFDx_Tydc7mRvd4_OHH35wgQYpPCnBLhE";
    // Replace with the real client registration IDs
    $registrationIDs = array( $row["regid"] );
    echo $row["regid"];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $title = "Latitud = ".$lat . "   Longitud = ".$lng;
    // Message to be sent
//    $text1 = $_POST['text1'];
    // Message to be sent

    // Set POST variables
    $url = 'https://android.googleapis.com/gcm/send';

    $fields = array(
        'registration_ids' => $registrationIDs,
        'data' => array( "title" => $title),
    );
    $headers = array(
        'Authorization: key=' . $apiKey,
        'Content-Type: application/json'
    );

    // Open connection
    $ch = curl_init();

    // Set the URL, number of POST vars, POST data
    curl_setopt( $ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_POST, true);
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields));

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode( $fields));

    // Execute post
    $result = curl_exec($ch);

    // Close connection
    curl_close($ch);
    // print the result if you really need to print else neglate thi
    echo $result;
    //print_r($result);
    //var_dump($result);
?>