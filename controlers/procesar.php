<?php

require("../model/conexion.php");

$eliminar = $_REQUEST['delete'];
$query = mysqli_query($conexion, "DELETE FROM Horario WHERE ID = $eliminar");

$query = mysqli_query($conexion, "ALTER TABLE Horario DROP ID");

$query = mysqli_query($conexion, "ALTER TABLE Horario AUTO_INCREMENT=1");

$query = mysqli_query($conexion, "ALTER TABLE Horario ADD ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY");

echo "Registro eliminado correctamente.";

?>

<?php
require("../model/conexion.php");

@$inicial = $_REQUEST['initial'];
@$final = $_REQUEST['endless'];
@$fecha = $_REQUEST['Date'];
@$dia = $_REQUEST['days'];


mysqli_query($conexion, "INSERT INTO Horario(Inicial, Final, Fecha, Dia) VALUES('$inicial', '$final', '$fecha', '$dia')");

echo "Subido correctamente";

mysqli_close($conexion);

?>