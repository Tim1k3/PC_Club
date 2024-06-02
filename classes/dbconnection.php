<?php
// Database configuration
class Database{
protected $conn;

// Create connection
public function createconnection(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "pc_club";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


return $conn;
}

}
?>
