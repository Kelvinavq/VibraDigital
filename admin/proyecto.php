<?php
session_start();
include("val_session.php");

if (!isset($_GET['id'])) {
    header("location: portafolio.php");
}else{
    $id = $_GET['id'];

    include("../config/connection.php");
    $sql = $connection->prepare("SELECT * FROM portfolio WHERE id ='$id'");
    $sql->execute();
    $proyecto = $sql->fetch(PDO::FETCH_LAZY);
}
?>
<!DOCTYPE html>
<html lang="es">

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

    <main class="details">

        <form method="post" id="portafolio" action="../backend/actualizar_proyecto.php" enctype="multipart/form-data" class="proyecto">

            <h2>Modificar proyecto</h2>
            <div class="inputs-modal">

            <input type="hidden" value="<?php echo $id ?>" name="id">

                <div class="grupo-input">
                    <label for="">Imágen vertical</label>

                    <div class="btn-file">
                        <label for="imagePortrait">
                            Subir nuevo archivo
                            <span class="material-icons-outlined">
                                file_upload
                            </span>
                        </label>
                        <input type="file" name="imagePortrait" id="imagePortrait">
                    </div>
                </div>
                <div class="grupo-input img">
                    <img src="../assets/portafolio/<?php echo $proyecto['image_portrait'] ?>" alt="" id="prevPortrait" class="portrait">
                </div>

                <div class="grupo-input">
                    <label for="">Imágen Horizontal</label>

                    <div class="btn-file">
                        <label for="imageLandscape">
                            Subir nuevo archivo
                            <span class="material-icons-outlined">
                                file_upload
                            </span>
                        </label>
                        <input type="file" name="imageLandscape" id="imageLandscape">
                    </div>
                </div>
                <div class="grupo-input img">
                    <img class="landscape" src="../assets/portafolio/<?php echo $proyecto['image_landscape'] ?>" alt="" id="prevLandscape">
                </div>

                <div class="grupo-input">
                    <label for="name">Nombre del proyecto</label>
                    <input type="text" id="name" name="name" value="<?php echo $proyecto['name'] ?>">
                </div>

                <div class="grupo-input">
                    <label for="link">Link del proyecto</label>
                    <input type="text" id="link" name="link" value="<?php echo $proyecto['link'] ?>">
                </div>

                <div class="grupo-input">
                    <label for="description">Descripción del proyecto</label>
                    <input type="text" id="description" name="description" value="<?php echo $proyecto['description'] ?>">
                </div>

            </div>

            <input type="submit" value="Guardar cambios">
        </form>
    </main>
    <!-- <script src="../js/portfolio_admin.js"></script> -->
    <?php include("dashboard_footer.php"); ?>

</body>

</html>