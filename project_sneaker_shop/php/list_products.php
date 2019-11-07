<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootbox.min.js"></script>
<script>
function deleteProduct(cod_zapatilla)
{
bootbox.confirm("¿estas seguro man?"+cod_zapatilla, function(result)
{
	if (result)
	{
		window.location="delete.php?q="+cod_zapatilla;
	}
})
}
function updateProduct(cod_zapatilla)
{

	window.location="edit.php?q="+cod_zapatilla;
}


</script>

<body>
	
	<h1 class='text-center'style='margin:2px 0px'>LISTADO DE PRODUCTOS</h1>
	<table class="table table-bordered table-striped" >
	
		<thead class="thead-light">
			<tr>
				<th>ID</th>
				<th>MODELO</th>
				<th>PRECIO</th>
				<th>COLOR</th>
				<th>MARCA</th>
				<th>ELIMINAR</th>
				<th>ACTUALIZAR</th>
			</tr>
		</thead>
		<tbody>
		<?php 
session_start();
if($_SESSION['logueado'])
{
    include_once '../includes/db.php';
    $con = openCon('../config/db_products.ini');
    $con -> set_charset("utf8mb4");
    $sql = "select s.id_sneakers AS id_sneakers, s.model AS modelo, s.price AS precio, c.description AS color, b.description AS marca from sneakers s  inner join colors c on s.id_colors=c.id_colors inner join  brands b on s.id_brands=b.id_brands;";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc())
    {?>
   
        <tr>
        <td>
      <?php echo $row['id_sneakers']; ?>
        </td>
        <td>
        <?php echo $row['modelo']; ?>
        </td>
        <td>
        <?php echo $row['precio']; ?>
        </td>
        <td>
        <?php echo $row['color']; ?>
        </td>
        <td>
        <?php echo $row['marca']; ?>
        </td>
        <td>
        <a href="#" onclick= "deleteProduct(<?php echo $row['id_sneakers']?>)">Eliminar Producto</a>
        </td>
        <td>
        <a href="#" onclick="updateProduct(<?php echo $row ['id_sneakers']?>)">Actualizar Producto</a>
        </td>
        </tr>
        <?php 
         }
         }
         ?>
        
</tbody>
	</table>
</body>
</html>



