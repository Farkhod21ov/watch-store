<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="watches";

$conn =mysqli_connect($servername, $username, $password,$dbname);

if(!$conn){
    die("Connection fail". mysqli_connect_error());
}else{
    "Успех";
}
?>