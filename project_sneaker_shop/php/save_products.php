<?php

session_start();
if($_SESSION['logueado'])
{
 
 
include_once 'upload_image.php';
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$observacion = $_POST['observacion'];
$marca = $_POST['marca'];
$color = $_POST['color'];
include_once '../includes/db.php';
$con = openCon('../config/db_products.ini');
$con -> set_charset("utf8mb4");

$sql = "INSERT INTO sneakers (model,price,id_colors,id_brands,image,obervation) VALUES (?,?,?,?,?,?)";
//variables proveniente de archivo upload_image.php
$path_img=$directorio.$nombre_img;
$stmt=$con ->prepare($sql);
$stmt-> bind_param( "sdiiss",$modelo,$precio,$color,$marca,$path_img,$observacion);
if ($stmt->execute())

{
    
?>
<script>
alert (" Producto ingresado");

window.location="insert_product.php";
</script>
<?php
}
 }
?>

