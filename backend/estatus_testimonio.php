<?php
include("../config/connection.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $estatus = $_POST['estatus'];

    switch ($estatus) {
        case 'aprobar':
            $newEstatus = "aprobado";
            break;
        case 'rechazar':
            $newEstatus = "rechazado";
            break;

        default:
            # code...
            break;
    }

    $sql = $connection->prepare("UPDATE testimonials SET estatus = '$newEstatus' WHERE id = '$id'");
    $sql->execute();

    include("../alertas.php");
    echo ' 
    <script>
        swal({
        title: "Estatus Actualizado",
        icon: "success",
      })
      .then((ok) => {
        if (ok) {
            window.history.back()
        }else{
            window.history.back()
        }
      });
      </script>

    ';
}
