<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "App_db";
$charset = "utf8mb4";

$connexion = mysqli_connect($host, $username, $password, $dbname);
if (!$connexion) {
    die("Connection échouée: " . mysqli_connect_error());
}

mysqli_set_charset($connexion, $charset);

//echo "connection réussie";



?>