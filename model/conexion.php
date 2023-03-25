<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "SistemaAlumnos";
$conexion = mysqli_connect($server, $user, $pass, $db);


if (!$conexion) {
    die("Connection failed ");
}

?>