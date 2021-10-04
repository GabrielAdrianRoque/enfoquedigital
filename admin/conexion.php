
<?php
    $server = "localhost";
    $usuario_db = "root";
    $pd = "";
    $db = "db_enfoque";

    $conn = mysqli_connect($server,$usuario_db,$pd,$db);

    if ($conn){
        // echo "se conecto con exito" . "<br>";
    }else{
        echo "No se pudo conectar con el servidor";
    }
?>