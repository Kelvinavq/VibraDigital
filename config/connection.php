<?php

include("config.php");

$server = ("mysql:dbname=" . BD . ";host=" . SERVER);

try {
    
    $connection = new PDO($server, USER, PASSWORD);
} catch (PDOException $e) {
    echo '
    <script>
    alert("Error en la conexion");
    </script>
    ';

}


?>