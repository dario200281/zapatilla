<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href="../css/form.css" rel="stylesheet">

</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3 class="text-center">INGRESO DE PRODUCTOS</h3>



</div>
<div class="col-md-12">
<form class="form-group" accept-charset="uft-8"
action="save_products.php" method="post" enctype="multipart/form-data">  
<!--  -->

<div class="form-group">
<label for="" class="control-label">MODELO</label><!-- cambia la aparecia al label -->
<input type="text" class="form-control"
placeholder="Modelo" required  name="modelo" id="modelo"><!--  class="fomr-control" =si o si reuiqere qye cargew algo -->

</div>
<div class="form-group">
<label for="" class="control-label">PRECIO</label><!-- cambia la aparecia al label -->
<input type="text" class="form-control"
placeholder="Precio" required name="precio" id="precio"><!--  class="fomr-control" =si o si reuiqere qye cargew algo -->

</div>
<div class="form-group">
<label class="control-label">OBSERVACION</label><!-- cambia la aparecia al label -->
<textarea class="form-control" rows="3" name="observacion" id="observacion" placeholder="Observacion" cols="1"></textarea> 
</div>

<div class="form-group">
<label class="control-label">Marca del producto</label>
<select class="form-control" id="marca" name="marca">
<!--  las mcaras seran cargadas de la base de datos -->
<?php 


include_once '../includes/db.php';
$con = openCon('../config/db_products.ini');
//$=conconexion
$con->set_charset("utf8mb4");
$sql="select id_brands, description from brands order by description;";
$result=$con->query($sql);

while ($row= $result->fetch_assoc())
{
    //echo "<option>".$row['description']."</option>";
    echo'<option value="'.$row['id_brands'].'">'.$row['description']."</option>"; 
    
    
}

?>
</select>

</div>
<div class="form-group">
<label class="control-label">Color</label>
<select class="form-control" id="color" name="color">

<!--  lo colores seran cargadas de la base de datos -->
<?php 

include_once '../includes/db.php';
$con = openCon('../config/db_products.ini');
//$=conconexion
$con->set_charset("utf8mb4");
$sql="SELECT id_colors, description	FROM colors ORDER BY description;";
$result=$con->query($sql);

while ($row= $result->fetch_assoc())
{
    //echo "<option>".$row['description']."</option>";
    //
    echo'<option value="'.$row['id_colors'].'">'.$row['description']."</option>";
    
    
}




?>
</select>

</div>
<div class="form-group">
<label class="control-label"> Seleccione imagen a subir</label>
<input type="file" id="imagen" name="imagen" class="form-control" size="30"/>

</div>
<div class="text-center">
<input type="submit" class="btn btn-success"
value="Añadir producto">


</div>

</form>
</div>
</div>
</div>

		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		
		
</body>
</html>
