<?php
include("../config/connection.php");

if (isset($_POST['name'])) {

    $fecha = new DateTime();

    $imagePortrait = (isset($_FILES['imagePortrait']['name'])) ? $_FILES['imagePortrait']['name'] : "";
    $nombre_imagePortrait = ($imagePortrait != "") ? $fecha->getTimestamp() . "_portrait_" . $_FILES['imagePortrait']['name'] : "";
    $tmpimagePortrait = $_FILES['imagePortrait']['tmp_name'];

    $imageLandscape = (isset($_FILES['imageLandscape']['name'])) ? $_FILES['imageLandscape']['name'] : "";
    $nombre_imageLandscape = ($imageLandscape != "") ? $fecha->getTimestamp() . "_landscape_" . $_FILES['imageLandscape']['name']  : "";
    $tmpimageLandscape = $_FILES['imageLandscape']['tmp_name'];

    if ($imagePortrait != "") {
        move_uploaded_file($tmpimagePortrait, "../assets/portafolio/" . $nombre_imagePortrait);
    }
    if ($imageLandscape != "") {
        move_uploaded_file($tmpimageLandscape, "../assets/portafolio/" . $nombre_imageLandscape);
    }

    $name = $_POST['name'];
    $link = $_POST['link'];
    $description = $_POST['description'];


    $sql = $connection->prepare("INSERT INTO portfolio (link, image_portrait, image_landscape, name, description) VALUES('$link','$nombre_imagePortrait','$nombre_imageLandscape','$name','$description')");
    $sql->execute();

    include("../alertas.php");

    echo ' 
        <script>
            swal({
            title: "Proyecto Guardado",
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
