<?php 

$servername = "shareddb-z.hosting.stackcp.net";
$username = "superadmin";
$password = "Endeavour2020!";
$dbname = "sueroxdb-313635e018";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
 //echo "conectado";
}

 ?>