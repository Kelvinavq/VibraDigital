<?php 

include("../config/connection.php");


$correo = $_POST['email'];
$pass = $_POST['pwd'];


if (!empty($correo) && !empty($pass)) {

    $pass = md5($pass);

    $sql = $connection->prepare("SELECT * FROM users WHERE email = ? AND pwd = ?");
    $sql->execute([$correo, $pass]);
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if ($usuario) {
        // Inicio de sesión exitoso

        session_start();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['name'] = $usuario['name'];
        $_SESSION['lname'] = $usuario['lname'];

        header("Location: ../admin/admin.php");
        exit();
    
    } else {
        include("../alertas.php");

        echo ' 
    <script>
        swal({
        title: "Correo o contraseña incorrectos",
        text: "Intenta nuevamente",
        icon: "error",
      })
      .then((ok) => {
        if (ok) {
            window.location = "../login.php";
        }else{
            window.location = "../login.php";
        }
      });
      </script>

    ';
    }
}

?>