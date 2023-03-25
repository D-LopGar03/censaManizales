<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">

        <br>
        <input type="number" name="Entrada" placeholder="Hora de entrada" required>
        <br>
        <input type="number" name="Salida" placeholder="Hora de salida" required>
        <br>
        <input type="date" name="Fecha" placeholder="Fecha" required>
        <br>
        <input type="text" name="Dia" placeholder="Dia" required>
        <br>
        <input type="submit" value="Enviar">

    </form>

    <?php   

        require("model/conexion.php");   

        @$in = $_POST['Entrada'];
        @$out = $_POST['Salida'];
        @$date = $_POST['Fecha'];
        @$day = $_POST['Dia'];
       
         /* if($tipoH != null){
            echo "";
        }
        else{
            
            @$tipoH = $_REQUEST['Entrada'];
            echo $tipoH;
        }  */
        
        $in = $in?$_POST['Entrada']:$in = "";
        $out = $out?$_POST['Salida']:$out = "";
        $date = $date?$_POST['Fecha']:$date = "";
        $day = $day?$_POST['Dia']:$day = "";

        $query = mysqli_query($conexion, "INSERT INTO Horario(Inicial, Final, Fecha, Dia) VALUES('$in', '$out', '$date', '$day')");
        
    ?>
    
</body>
</html>