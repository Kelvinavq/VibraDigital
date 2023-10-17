<?php 

$sql = $connection->prepare("SELECT * FROM testimonials WHERE estatus = 'aprobado' ORDER BY id DESC");
$sql->execute();
$testimonios = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql2 = $connection->prepare("SELECT * FROM portfolio ORDER BY id DESC");
$sql2->execute();
$proyectos = $sql2->fetchAll(PDO::FETCH_ASSOC);

