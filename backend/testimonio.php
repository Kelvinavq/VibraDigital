<?php
include("../config/connection.php");

$name = $_POST['name'];
$message = $_POST['message'];
$fecha = new DateTime();

$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";
$nombre_image = ($image != "") ? $fecha->getTimestamp() . "_" . $_FILES['image']['name'] : "";
$tmpimage = $_FILES['image']['tmp_name'];

if ($image != "") {
    move_uploaded_file($tmpimage, "../assets/testimonial/" . $nombre_image);
}

$estatus = "pendiente";

$sql = $connection->prepare("INSERT INTO testimonials (name, testimonial, image, estatus) VALUES('$name','$message','$nombre_image','$estatus')");
$sql->execute();

include("../alertas.php");

echo ' 
<script>
swal({
title: "Su testimonio ha sido registrado correctamente",
text: "Muchas gracias por colaborar con VIBRA DIGITAL.",
icon: "success",
})
.then((ok) => {
if (ok) {
    window.location = "../index.php";
}else{
    window.location = "../index.php";
}
});
</script>

';
