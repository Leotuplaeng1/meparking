<?php 

$servername = "localhost";
$username = "meparkin_db";
$password = "313326339_Mep";
$dbname = "meparkin_db"

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>