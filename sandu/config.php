<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "smartdoc";
$port = 3306;

// $conn = mysqli_connect($serverName,,$dbUsername,$dbPassword,$dbName);

$conn = new mysqli($host, $user, $password, $database, $port);
    if ($conn->connect_error) {
        die("connection failed". mysqli_connect_error());
    }


    ?>