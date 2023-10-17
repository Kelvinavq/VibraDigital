<!DOCTYPE html>
<html>
  <head>
    <title>Testimonios</title>
    <link rel="stylesheet" type="text/css" href="css/crearTestimonio.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>


    <img class="wave" src="assets/img/wave.png" />
    <div class="container">
      <div class="img">
        <img src="assets/img/bg.svg" />
      </div>

      <div class="login-content">
        <form action="backend/testimonio.php" method="post" id="testimonios" enctype="multipart/form-data">
          <div class="head">
            <img src="assets/img/Simple.png" />
            <h2 class="title">
              Comparte tu Experiencia con <strong>Vibra Digital</strong>
            </h2>
            <p>
              ¡Nos encantaría escuchar tu opinión! Tu testimonio es invaluable
              para nosotros y ayuda a otros a conocer más sobre nuestra empresa.
              Por favor, tómate un momento para compartir tu experiencia con
              nosotros. Agradecemos sinceramente tu tiempo y confianza en
              nuestro trabajo.
            </p>
          </div>

          <div class="grupo-input">
            <input type="text" class="input" placeholder="Nombre y Apellido" id="name" name="name"/>
            <span class="material-icons-outlined"> person </span>
          </div>
          <div class="grupo-input">
            <span class="material-icons-outlined"> comment </span>
            <textarea
              name="message"
              id="message"
              placeholder="Escriba su testimonio..."
            ></textarea>
          </div>

          <div class="grupo-input">
            <label>Le gustaría compartir una foto o logo? (Opcional)</label>

            <label for="image" class="upload">
                <span class="material-icons-outlined file"> file_upload </span>
              Subir Foto / Logo
              <input type="file" name="image" id="image" />
            </label>
            <p class="nombreArchivo"></p>
          </div>

          <div class="grupo-input">
              <input type="submit" class="btn" value="Enviar" />
          </div>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="js/crearTestimonio.js"></script>
  </body>
</html>
