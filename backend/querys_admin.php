<?php 
include("../config/connection.php");

$sql = $connection->prepare("SELECT * FROM testimonials ORDER BY id DESC LIMIT 4");
$sql->execute();
$testimonios = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql2 = $connection->prepare("SELECT * FROM testimonials ORDER BY id DESC ");
$sql2->execute();
$testimonios2 = $sql2->fetchAll(PDO::FETCH_ASSOC);



$sql3 = $connection->prepare("SELECT * FROM portfolio ORDER BY id DESC LIMIT 4");
$sql3->execute();
$proyectos = $sql3->fetchAll(PDO::FETCH_ASSOC);

$sql4 = $connection->prepare("SELECT * FROM portfolio ORDER BY id DESC ");
$sql4->execute();
$proyectos2 = $sql4->fetchAll(PDO::FETCH_ASSOC);