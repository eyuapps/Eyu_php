<?php 
//connection create

$host = "localhost";
$user = "root";
$password = "";
$database = "eyuschoolofcomputingdb";

$conn = new mysqli($host , $user, $password, $database);

//checkibng

if($conn->connect_error){
    die("<h3 style='color: red;'>Not Connected: ". $conn->connect_error."</h3>");
}


//close connection
?>