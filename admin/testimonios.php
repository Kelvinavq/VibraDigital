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
</head>

<body>

  <?php include("dashboard_head.php"); ?>
  <?php include("../backend/querys_admin.php"); ?>

    <!-- modal -->
    <div class="background" onclick="toggleModal()"></div>
  <form class="modal " method="post" action="../backend/estatus_testimonio.php">

    <h2 class="titleModal"></h2>
    <p class="textModal"></p>

    <div class="buttons">
      <button name="estatus" value="aprobar" class="aprobar">Aprobar</button>
      <button name="estatus" value="rechazar" class="rechazar">Rechazar</button>
    </div>

    <input type="hidden" id="id" name="id">

  </form>

  <!-- modal -->


  <div class="details">
    <div class="recentOrders">
      <div class="cardHeader">
        <h2>Testimonios Recientes</h2>
        <a href="testimonios.php" class="btn">Ver todos</a>
      </div>

      <?php if ($sql->rowCount() > 0) {  ?>
        <table>
          <thead>
            <tr>
              <td></td>
              <td>Nombre</td>
              <td>Testimonio</td>
              <td>Estatus</td>
            </tr>
          </thead>

          <tbody>

            <?php foreach ($testimonios2 as $testimonio) { ?>

              <tr class="li-testimonio" onclick="toggleModal()" data-id="<?php echo $testimonio['id'] ?>">
                <td>
                  <?php if ($testimonio['image'] == "") { ?>
                    <img src="../assets/img/usuario.png" alt="">
                  <?php } else {  ?>
                    <img src="../assets/testimonial/<?php $testimonio['image'] ?>" alt="">
                  <?php } ?>
                </td>
                <td><?php echo ucfirst($testimonio['name']) ?></td>
                <td><?php echo ucfirst($testimonio['testimonial']) ?></td>
                <td><span class="status <?php echo $testimonio['estatus'] ?>"><?php echo ucfirst($testimonio['estatus']) ?></span></td>
              </tr>

            <?php } ?>

          </tbody>
        </table>
      <?php } else {  ?>
        <p>Aún no hay testimonios</p>
      <?php } ?>


    </div>
  </div>

  <script src="../js/consultar_testimonio.js"></script>
  <?php include("dashboard_footer.php"); ?>


</body>

</html>