<?php


$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];




include("alertas.php");


$para      = "nahuelvelizfx@gmail.com, kvalera200244@gmail.com";
$titulo    = 'Contacto - Vibra Digital';
$mensaje   = '
        
        Mensaje del formulario de contacto

        Nombre: ' . $nombre . ' 
        Teléfono: ' . $telefono . ' 
        Correo: ' . $correo . ' 

        Mensaje:   ' . $mensaje . '

        ';
$cabeceras = 'From: contacto@digitalvibra.com' . "\r\n" .
    'Reply-To: contacto@digitalvibra.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($para, $titulo, $mensaje, $cabeceras)) {


    echo '
            <script>
            swal({
                title: "Se ha enviado tu mensaje",
                text: "En breves serás contactado por el equipo de Vibra Digital",
                icon: "success",
              })
              .then((ok) => {
                if (ok) {
                 window.location = "index.php"
                }else{
                 window.location = "index.php"
                }
              });
            </script>
            ';
};
