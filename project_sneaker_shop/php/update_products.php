<?php
session_start();
if ($_SESSION['logueado']) {
    include_once '../includes/db.php';
    $con = openCon('../config/db_products.ini');
    $con->set_charset("utf8mb4");
    print_r($_POST);
    $model = $_POST['modelo'];
    $price = $_POST['precio'];
    $observation = $_POST['observacion'];
    $brand = $_POST['marca'];
    $colors = $_POST['color'];

    $id = $_POST['id'];
    $sql = "UPDATE sneakers SET model='$model', price='$price', obervation='$observation',id_colors='$colors', id_brands='$brand' WHERE id_sneakers=" . $id;
    // UPDATE sneakers SET model='pruebatest', price='o', obervation='pruebatest',id_colors=1, id_brands=5 WHERE id_sneakers=5;
    $con->query($sql);
    header('location:list_products.php');
}
?>
