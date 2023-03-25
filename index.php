<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <li>
                <a href="index.php?pag=horarios">Horarios</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="index.php?pag=materias">Materias</a>                
            </li>
        </ul>
        <ul>
            <li>
                <a href="index.php?pag=Home">Home</a>                
            </li>
        </ul>
    </nav>

    <?php

        @$pagina = $_GET['pag'];
        
        if($pagina){
            @require("views/".$pagina.".php");

        }else{
            require("views/Home.php");
        }

    ?>
    
</body>
</html>