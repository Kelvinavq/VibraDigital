<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diseño y Desarrollo Web | Vibra Digital</title>

  <!-- css -->
  <link rel="icon" href="assets/img/Simple-claro.png" />
  <link rel="stylesheet" href="css/config.css" />
  <link rel="stylesheet" href="css/circulos.css" />
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/ventajas.css" />
  <link rel="stylesheet" href="css/procesos.css" />
  <link rel="stylesheet" href="css/metodo.css" />
  <link rel="stylesheet" href="css/testimonios.css" />
  <link rel="stylesheet" href="css/portafolio.css" />
  <link rel="stylesheet" href="css/contacto.css" />

  <!-- librerias -->
  <script src="https://kit.fontawesome.com/aa8fbfe411.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- jQuery -->

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />

  <!-- meta -->
  <meta name="description" content="Impulsamos tu presencia en línea con diseños web creativos y desarrollo a medida. Potencia tu marca con soluciones digitales innovadoras y atractivas.">

  <meta name="keywords" content="vibra digital, sitios web, pagina web, seo, sitio web, desarrollo web, programacion web, agencia digital, diseño web">

  <link rel="canonical" href="https://digitalvibra.com/" />

  <meta name="robots" content="index, follow">

  <!-- analytics -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1XHM29H0F3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-1XHM29H0F3');
  </script>

  <!-- console -->
  <meta name="google-site-verification" content="X3lUv-ul-BJkYb7f-QiDrmsVw5KJwqmVB9fqGTaDhXQ" />

</head>

<body>

  <?php include("config/connection.php") ?>
  <?php include("backend/querys.php") ?>
  <!-- menu -->
  <section>
    <div class="circle uno"></div>

    <!-- menu -->
    <nav>
      <div class="logo">
        <a href="#">
          <img width="100" src="assets/img/Simple.png" alt="logo vibra digital" />
        </a>
      </div>

      <ul>
        <li class="logo li">
          <a href=""><img src="assets/img/Simple.png" alt="" /></a>
        </li>
        <li class="active li menu-inicio"><a href="#inicio">Inicio</a></li>
        <li class="li menu-ventajas"><a href="#ventajas">Ventajas</a></li>
        <li class="li menu-procesos"><a href="#procesos">Proceso</a></li>
        <li class="li menu-testimonios"><a href="#testimonios">Testimonios</a></li>
        <li class="li menu-portafolio">
          <a href="#portafolio">Portafolio</a>
        </li>

        <button class="cerrar">
          <i class="fa-solid fa-xmark"></i>
        </button>

        <button class="cotizacion li" onclick="window.location= '#contacto'">
          <i class="fa-sharp fa-solid fa-phone fa-shake"></i>
          Cotización
        </button>
      </ul>

      <button onclick="window.location= '#contacto'" class="btn">
        <i class="fa-sharp fa-solid fa-phone fa-shake"></i>
        Cotización
      </button>

      <button class="btn-menu">
        <i class="fa-solid fa-bars-staggered"></i>
      </button>
    </nav>
    <!-- menu -->
  </section>
  <!-- menu -->

  <!-- header -->
  <header id="inicio">
    <div class="left">
      <div class="textos">
        <h1 class="animate__animated animate__backInLeft">
          En <strong>Vibra Digital</strong>
        </h1>
        <h2 class="animate__animated animate__backInUp">
          Construimos sitios web que trabajan por usted
        </h2>
        <div class="separador animate__animated animate__fadeInLeft"></div>
        <p class="animate__animated animate__lightSpeedInRight">
          Los negocios que cuentan con una página web cómoda de usar para el
          cliente, con un mensaje claro, incrementan sus ventas mas de un 25%.
        </p>
      </div>
      <div class="circle dos"></div>
    </div>

    <div class="right">
      <div class="img">
        <img src="assets/img/Recurso 3.svg" alt="diseño web vibra digital" />
      </div>
    </div>
  </header>
  <!-- header -->

  <!-- tarjetas header -->

  <section class="cards">
    <div class="Card animate__animated animate__backInUp">
      <div class="icono">
        <i class="fa-solid fa-ranking-star"></i>
      </div>

      <div class="texto">
        <span>SEO</span>
        <p>Todos nuestros servicios incluyen optimización SEO</p>
      </div>
    </div>

    <div class="Card animate__animated animate__backInUp">
      <div class="icono">
        <i class="fa-solid fa-globe"></i>
      </div>

      <div class="texto">
        <span>Posicionamiento</span>
        <p>Aparece en los primeros resultados de búsqueda</p>
      </div>
    </div>

    <div class="Card animate__animated animate__backInUp">
      <div class="icono">
        <i class="fa-solid fa-code"></i>
      </div>

      <div class="texto">
        <span>Optimización</span>
        <p>Su sitio web optimizado y con código limpio</p>
      </div>
    </div>
  </section>

  <!-- tarjetas header -->

  <section id="ventajas" class="ventajas">
    <div class="titulo">
      <h2 data-aos="fade-up">
        ¿Sabía las ventajas de contar con un
        <strong data-aos="fade-up">sitio web bien diseñado?</strong>
      </h2>
      <p data-aos="fade-up">
        Nosotros nos encargamos de que su negocio gane prestigio digital para
        que pueda incrementar sus ventas
      </p>
    </div>

    <div class="contenedor-ventajas">
      <div class="ventaja" data-aos="fade-up">
        <div class="icono">
          <span class="material-icons-outlined"> stacked_line_chart </span>
        </div>

        <div class="texto">
          <p>
            Los negocios que no cuentan con un sitio web de su propia marca,
            venden un 30% menos que los negocios que si cuentan con un sitio
            como tal
          </p>
        </div>
      </div>

      <div class="ventaja" data-aos="fade-up">
        <div class="icono">
          <span class="material-icons-outlined"> data_exploration </span>
        </div>

        <div class="texto">
          <p>Gane prestigio y posicionamiento en el amplio mundo digital</p>
        </div>
      </div>

      <div class="ventaja" data-aos="fade-up">
        <div class="icono">
          <span class="material-icons-outlined"> corporate_fare </span>
        </div>

        <div class="texto">
          <p>Facilita la parte organizacional y técnica de su negocio</p>
        </div>
      </div>
    </div>
  </section>

  <section id="procesos" class="procesos">
    <div class="titulo">
      <h2 data-aos="fade-up">Nuestro <strong>Proceso</strong></h2>
      <p></p>
    </div>

    <div class="contenedor-proceso">
      <div class="proceso" data-aos="fade-up">
        <p class="numero">01</p>

        <div class="contenido">
          <i class="fa-regular fa-eye"></i>
          <span>Descubrimiento</span>
          <p>
            Años de desarrollo para excelentes resultados en nuestro proceso
          </p>
        </div>
      </div>

      <div class="proceso" data-aos="fade-up">
        <p class="numero">02</p>

        <div class="contenido">
          <i class="fa-regular fa-pen-to-square"></i>
          <span>Fase de Diseño</span>
          <p>
            Implementamos la estrategia realizando un prototipo de diseño de
            alta calidad
          </p>
        </div>
      </div>

      <div class="proceso" data-aos="fade-up">
        <p class="numero">03</p>

        <div class="contenido">
          <i class="fa-solid fa-layer-group"></i>
          <span>Fase de Desarrollo</span>
          <p>
            Podrá ver como construimos su sitio web optimizado para convertir
            clientes
          </p>
        </div>
      </div>

      <div class="proceso" data-aos="fade-up">
        <p class="numero">04</p>

        <div class="contenido">
          <i class="fa-solid fa-rocket"></i>
          <span>Lanzamiento</span>
          <p>
            Su herramienta de generación de clientes 24/7 comienza a funcionar
          </p>
        </div>
      </div>
    </div>

    <div class="texto">
      <p data-aos="fade-up">
        Si quiere descubrir cómo puede diferenciarse del resto, construyendo
        un sitio web de alta performance, que genere clientes 24/7, contáctese
        con nosotros para empezar
      </p>
    </div>

    <button data-aos="fade-up" class="btn" onclick="window.location= '#contacto'">
      ¡Quiero Presupuestos!
    </button>
  </section>

  <!-- metodo de desarrollo -->
  <section class="metodos">
    <div class="titulo">
      <h2 class="" data-aos="fade-up">¿Cómo trabajamos?</h2>
    </div>

    <div class="contenedor-metodos">
      <div class="metodo">
        <div class="tarjeta" data-aos="fade-up">
          <i class="fa-solid fa-sitemap"></i>
          <span>Recopilación de Información</span>
          <div class="go-corner"></div>
        </div>

        <div class="tarjeta" data-aos="fade-up">
          <i class="fa-solid fa-calendar-days"></i>
          <span>Planificación del Proyecto</span>
          <div class="go-corner"></div>
        </div>

        <div class="tarjeta" data-aos="fade-up">
          <i class="fa-solid fa-code"></i>
          <span>Desarrollo y Programación</span>
          <div class="go-corner"></div>
        </div>

        <div class="tarjeta" data-aos="fade-up">
          <i class="fa-solid fa-rocket"></i>
          <span>Testeo y Finalización</span>
          <div class="go-corner"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- metodo de desarrollo -->

  <!-- testimonios -->
  <section id="testimonios" class="testimonial-section">

    <div class="title">
      <h2 data-aos="fade-up">Lo Que Nuestros <strong>Clientes</strong> Dicen</h2>
      <p data-aos="fade-up">En <strong>Vibra Digital</strong>, nos enorgullecemos de ofrecer soluciones de desarrollo web de primera clase. Nuestro enfoque centrado en el cliente y nuestra dedicación a la excelencia nos han permitido construir relaciones sólidas con empresas de diversos sectores. Pero no tomes solo nuestra palabra, escucha lo que dicen nuestros clientes sobre su experiencia con nosotros.</p>
    </div>
    <div class="large-container" data-aos="fade-up">
      <div class="testimonial-carousel owl-carousel owl-theme">

        <?php foreach ($testimonios as $testimonio) {
        ?>
          <div class="testimonial-block">
            <div class="inner-box">
              <div class="text">
                <?php echo ucfirst($testimonio['testimonial']) ?>
              </div>
              <div class="info-box">
                <div class="thumb">
                  <?php if ($testimonio['image'] == "") {  ?>
                    <img src="assets/img/usuario.png" alt="" />
                  <?php } else {  ?>
                    <img src="assets/testimonial/<?php echo $testimonio['image'] ?>" alt="" />
                  <?php } ?>

                </div>
                <h4 class="name"><?php echo ucfirst($testimonio['name']) ?></h4>
                <span class="designation"></span>
              </div>
            </div>
          </div>

        <?php } ?>
      </div>

      <div class="thumb-layer paroller">
        <figure class="image">
          <img src="assets/img/user-thumbs.png" alt="" />
        </figure>
      </div>
    </div>
  </section>

  <!-- testimonios -->

  <!-- portafolio -->

  <section id="portafolio" class="portafolio" data-aos="fade-up">
    <div class="app">
      <div class="cardList">
        <button class="cardList__btn btn btn--left">
          <div class="icon">
            <svg>
              <use xlink:href="#arrow-left"></use>
            </svg>
          </div>
        </button>

        <div class="cards__wrapper">

          <?php foreach ($proyectos as $proyecto) { ?>
            <a href="<?php echo $proyecto['link'] ?>" target="_blank" class="card current--card">
              <div class="card__image">
                <img src="assets/portafolio/<?php echo $proyecto['image_portrait'] ?>" alt="<?php echo $proyecto['name'] ?>" />
              </div>
            </a>
          <?php } ?>

        </div>

        <button class="cardList__btn btn btn--right">
          <div class="icon">
            <svg>
              <use xlink:href="#arrow-right"></use>
            </svg>
          </div>
        </button>
      </div>

      <div class="infoList">
        <div class="info__wrapper">
          <?php foreach ($proyectos as $proyecto) { ?>

            <div class="info current--info">
              <h1 class="text name"><?php echo $proyecto['name'] ?></h1>
              <a href="<?php echo $proyecto['link'] ?>" target="_blank" class="text description"><?php echo $proyecto['description'] ?></a>
            </div>

          <?php } ?>

        </div>
      </div>

      <div class="app__bg">
        <?php foreach ($proyectos as $proyecto) { ?>

          <div class="app__bg__image current--image">
            <img src="assets/portafolio/<?php echo $proyecto['image_landscape'] ?>" alt="<?php echo $proyecto['name'] ?>" />
          </div>

        <?php } ?>

      </div>
    </div>

    <svg class="icons" style="display: none">
      <symbol id="arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <polyline points="328 112 184 256 328 400" style="
              fill: none;
              stroke: #fff;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 48px;
            " />
      </symbol>
      <symbol id="arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <polyline points="184 112 328 256 184 400" style="
              fill: none;
              stroke: #fff;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 48px;
            " />
      </symbol>
    </svg>
  </section>

  <!-- portafolio -->

  <!-- contacto -->

  <section id="contacto" class="contacto">
    <div class="titulo">
      <h2 data-aos="fade-up"><strong>Contáctenos</strong></h2>
      <p></p>
    </div>
    <form action="mail.php" id="contacto-form" method="post" data-aos="fade-up">
      <div class="left">
        <div class="grupo-input">
          <input type="text" placeholder="Nombre" id="nombre" name="nombre" />
        </div>

        <div class="inputs">
          <div class="grupo-input">
            <input type="tel" placeholder="Teléfono" id="telefono" name="telefono" />
          </div>
          <div class="grupo-input">
            <input type="email" placeholder="Correo electrónico" id="correo" name="correo" />
          </div>
        </div>

        <div class="grupo-input">
          <textarea name="mensaje" id="mensaje" placeholder="Escriba su mensaje..."></textarea>
        </div>

        <input type="submit" value="Enviar" class="btn" />
      </div>
      <div class="right" id="particles-js" data-aos="fade-up">
        <img src="assets/img/Simple-claro.png" alt="logotipo vibra digital" />
      </div>
    </form>
  </section>

  <!-- contacto -->

  <!-- top -->
  <button onclick="window.location= '#inicio'" class="top animate__animated animate__bounceIn">
    <i class="fa-solid fa-chevron-up"></i>
  </button>
  <!-- top -->

  <!-- scripts -->
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>

  <!-- Waypoints -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

  <script src="js/testimonios.js"></script>
  <script src="js/portafolio.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/animaciones.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="js/contacto.js"></script>
  <script>
    AOS.init();
  </script>



</body>

</html>