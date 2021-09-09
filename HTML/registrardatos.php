<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        if($_REQUEST['clave'] == $_REQUEST['repClave']){
            echo "El usuario ". $_REQUEST['email'];
            echo "<br>";
            echo "Se registro con exito";
        }
        else{
            echo "Las contraseñas NO son iguales";
        }

        echo $_REQUEST['nombre'];
        echo "<br>";
        echo $_REQUEST['email'];
        echo "<br>";
        echo $_REQUEST['dni'];
        echo "<br>";
        echo $_REQUEST['curri'];
    */
    echo $_REQUEST['nombre'];
    echo "<br>";
    echo $_REQUEST['email'];
    echo "<br>";
    if(isset($_REQUEST['amarteDuele'])){
        echo "Amarte duele";
    }
    if(isset($_REQUEST['rapidoFurioso'])){
        echo "Rapido y Furiosos";
    }
    if(isset($_REQUEST['ted'])){
        echo "Ted";
    }
    ?>
</body>
</html>