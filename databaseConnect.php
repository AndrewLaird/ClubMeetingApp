<?php

$servername = "localhost";
$username = "andrew";
$password = "localhost";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>