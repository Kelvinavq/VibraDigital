<?php 
include("../config/connection.php");

if (isset($_POST['id'])) {
    
    $id = $_POST['id'];

    $sql = $connection->prepare("SELECT * FROM testimonials WHERE id = '$id'");
    $sql->execute();

    $data  = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
}
