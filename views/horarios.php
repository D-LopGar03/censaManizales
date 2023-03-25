<link rel="stylesheet" href="style.css">
<?php

require("model/conexion.php");
$query = mysqli_query($conexion, "SELECT * FROM Horario");
?>

<table id="horario">
    <tbody>

        <thead>
            <th>
                ID
            </th>
            <th>
                Inicial
            </th>
            <th>
                Final
            </th>
            <th>
                Fecha
            </th>
            <th>
                Dia
            </th>
        </thead>

        <?php
         while ($res = mysqli_fetch_array($query)) {
            echo '<tr>';
            echo '<td>';
            echo $res['ID'];
            echo '</td>';
            echo '<td>';
            echo $res['Inicial'];
            echo '</td>';
            echo '<td>';
            echo $res['Final'];
            echo '</td>';
            echo '<td>';
            echo $res['Fecha'];
            echo '</td>';
            echo '<td>';
            echo $res['Dia'];
            echo '</td>';
            echo "</tr>";
        }
        mysqli_close($conexion);
         
        ?>

    </tbody>
</table>

<?php

    require("views/InsertHorary.php");

?>

