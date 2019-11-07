
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

<link rel="stylesheet" href="../css/bootstrap.min.css">

</body>
</html>
<?php


session_start();
if ($_SESSION['uname']) 
{
    echo "bienvenido," . $_SESSION['uname'];

    //echo "<h1 style='text-align:center'> opciones de menu</h1>";//por unica vez utilizamos atributo stle oja de estilo para etiquieta
    echo "<br>";
    echo "<a href='logout.php'> logout </a>";
    echo "<h1 class='text-center'> opciones de menu</h1>";
}
else

    header("location:../form-login.html");
    echo "<a href='insert_product.php' style='display:flex; justify-content:center';> Insertar Productos </a>";
    echo "<a href='list_products.php' style='display:flex; justify-content:center';> Borrar Producto </a>";
    echo "<a href='list_products.php' style='display:flex; justify-content:center';> Modificar Productos </a>";
    
    echo "<br> hora de conexion  ".$_SESSION['time'];
   



?>