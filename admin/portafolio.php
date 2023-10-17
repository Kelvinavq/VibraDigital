<?php
session_start();
include("val_session.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/config.css" />
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="stylesheet" href="../css/modal.css" />

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <?php include("dashboard_head.php"); ?>
    <?php include("../backend/querys_admin.php"); ?>

    <!-- modal -->
    <div class="background" onclick="toggleModal()"></div>
    <form class="modal " id="portafolio" method="post" action="../backend/guardar_portfolio.php" enctype="multipart/form-data">

        <h2>Agregar nuevo proyecto</h2>
        <div class="inputs-modal">

            <div class="grupo-input">
                <label for="">Imágen vertical</label>

                <div class="btn-file">
                    <label for="imagePortrait">
                        Subir archivo 
                        <span class="material-icons-outlined">
                            file_upload
                        </span>
                    </label>
                    <input type="file" name="imagePortrait" id="imagePortrait">
                </div>
            </div>
            <div class="grupo-input img">
                <img src="" alt="" id="prevPortrait">
            </div>

            <div class="grupo-input">
                <label for="">Imágen Horizontal</label>

                <div class="btn-file">
                    <label for="imageLandscape">
                        Subir archivo (1920 x 500)
                        <span class="material-icons-outlined">
                            file_upload
                        </span>
                    </label>
                    <input type="file" name="imageLandscape" id="imageLandscape">
                </div>
            </div>
            <div class="grupo-input img">
                <img src="" alt="" id="prevLandscape">
            </div>

            <div class="grupo-input">
                <label for="name">Nombre del proyecto</label>
                <input type="text" id="name" name="name">
            </div>

            <div class="grupo-input">
                <label for="link">Link del proyecto</label>
                <input type="text" id="link" name="link">
            </div>

            <div class="grupo-input">
                <label for="description">Descripción del proyecto</label>
                <input type="text" id="description" name="description">
            </div>

        </div>

        <input type="submit" value="Guardar proyecto">
    </form>
    <!-- modal -->

    <div class="head">
        <button onclick="toggleModal()">Añadir nuevo</button>
    </div>

    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Portafolios recientes</h2>
            </div>

            <?php if ($sql3->rowCount() > 0) {  ?>

                <table>
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Link</td>
                            <td>Descripción</td>
                            <td>Imagen vertical</td>
                            <td>Imagen horizontal</td>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($proyectos as $proyecto) { ?>

                            <tr class="li-portfolio" onclick="window.location='proyecto.php?id=<?php echo $proyecto['id'] ?>'" >

                                <td><?php echo ucfirst($proyecto['name']) ?></td>
                                <td><?php echo ($proyecto['link']) ?></td>
                                <td><?php echo ucfirst($proyecto['description']) ?></td>
                                <td><img src="../assets/portafolio/<?php echo ($proyecto['image_portrait']) ?>" alt=""></td>
                                <td><img src="../assets/portafolio/<?php echo ($proyecto['image_landscape']) ?>" alt=""></td>

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            <?php } else {  ?>
                <p>Aún no hay proyectos</p>
            <?php } ?>
        </div>
    </div>


    <script src="../js/portfolio_admin.js"></script>
    <?php include("dashboard_footer.php"); ?>

</body>

</html>