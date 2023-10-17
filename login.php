<?php 
session_start();
if (isset($_SESSION['id'])) {
  header("location: admin/admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="css/config.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>
  <body>
    <body translate="no">
      <div >
        <div class="container">
          <form id="login" class="box" method="post" action="backend/login.php">
            <h4>Vibra<span>Digital</span></h4>
            <h5>Bienvenido a tu Agencia</h5>
            <input
              type="email"
              name="email"
              placeholder="Correo electrónico"
              id="email"
            />
            <input
              type="password"
              name="pwd"
              placeholder="Contraseña"
              id="pwd"
            />
            <input type="submit" value="Iniciar Sesión" class="btn1" />
          </form>
        </div>
      </div>

      <script src="js/login.js"></script>
    </body>
  </body>
</html>
