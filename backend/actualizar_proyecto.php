<?php 
include("../config/connection.php");

if (isset($_POST['id'])) {

    $fecha = new DateTime();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $link = $_POST['link'];
    $description = $_POST['description'];

    $valImg = $connection->prepare("SELECT * FROM portfolio WHERE id = '$id'");
    $valImg->execute();
    $imgActual = $valImg->fetch(PDO::FETCH_LAZY);


    $portraitActual = $imgActual['image_portrait'];
    $landscapeActual = $imgActual['image_landscape'];


    $imagePortrait = (isset($_FILES['imagePortrait']['name'])) ? $_FILES['imagePortrait']['name'] : "";
    $nombre_fotoPortrait = ($imagePortrait != "") ? $fecha->getTimestamp() . "_portrait_" . $_FILES['imagePortrait']['name'] : $portraitActual;
    $tmpfotoPortrait = $_FILES['imagePortrait']['tmp_name'];

    if ($nombre_fotoPortrait != $portraitActual) {
        if (is_writable("../assets/portafolio/" . $portraitActual)) {
            unlink("../assets/portafolio/" . $portraitActual);
            move_uploaded_file($tmpfotoPortrait, "../assets/portafolio/" . $nombre_fotoPortrait);
        }
    }


    $imageLandscape = (isset($_FILES['imageLandscape']['name'])) ? $_FILES['imageLandscape']['name'] : "";
    $nombre_fotoLandscape = ($imageLandscape != "") ? $fecha->getTimestamp() . "_landscape_" . $_FILES['imageLandscape']['name'] : $landscapeActual;
    $tmpfotoLandscape = $_FILES['imageLandscape']['tmp_name'];

    if ($nombre_fotoLandscape != $landscapeActual) {
        if (is_writable("../assets/portafolio/" . $landscapeActual)) {
            echo "si";
            unlink("../assets/portafolio/" . $landscapeActual);
            move_uploaded_file($tmpfotoLandscape, "../assets/portafolio/" . $nombre_fotoLandscape);
        }
    }

    $sql = $connection->prepare("UPDATE portfolio SET name = '$name', link = '$link', description = '$description', image_portrait = '$nombre_fotoPortrait', image_landscape = '$nombre_fotoLandscape' WHERE id = '$id'");
    $sql->execute();

    include("../alertas.php");

    echo ' 
        <script>
            swal({
            title: "Proyecto Actualizado",
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