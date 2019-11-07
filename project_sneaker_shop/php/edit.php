<?php
session_start();
if ($_SESSION['logueado']) {
    include_once '../includes/db.php';
    $con = openCon('../config/db_products.ini');
    $con->set_charset("utf8mb4");
    $idUpt = $_GET['q'];
    $sql = "select s.id_sneakers AS id_sneakers, s.model AS modelo, s.price AS precio, c.description AS color, b.description AS marca, s.obervation AS observacion, s.id_colors AS id_colors, s.id_brands AS id_brands from sneakers s  inner join colors c on s.id_colors=c.id_colors inner join  brands b on s.id_brands=b.id_brands where id_sneakers= " . $idUpt;
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
<link
	href="https://fonts.googleapis.com/css?family=Raleway&display=swap"
	rel="stylesheet">
<link
	href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap"
	rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="../css/form.css" rel="stylesheet">

</head>

<body>
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="text-center">Actualizar producto</h3>
			</div>

			<div class="col-md-12">


				<form class="form-group" accept-charset="utf-8"
					action="update_products.php" method="post"
					enctype="multipart/form-data">
					
					<div class="form-group">
						<input type="hidden" name="id"
							value="<?php echo $row['id_sneakers']?>">
					</div>
					<div class="form-group">
						<label for="" class="control-label">Modelo</label> <input
							type="text" class="form-control"
							value="<?php echo $row['modelo']?>" name="modelo" id="modelo" />
					</div>

					<div class="form-group">
						<label for="" class="control-label">Precio</label> <input
							type="text" class="form-control"
							value="<?php echo $row['precio']?>" name="precio" id="precio" />
					</div>

					<div class="form-group">
						<label for="" class="control-label">Observación</label>
						<textarea class="form-control" rows="3" placeholder="observacion"
							name="observacion" id="observacion">
							<?php echo $row['observacion']?>
						</textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Marca</label> <select id="marca"
							name="marca" class="form-control">
							<option value="<?php echo $row ['id_brands']?>">
<?php echo $row ['marca']?>
</option>

<?php

$sqlbrand = "SELECT id_brands AS id_brands,description AS description FROM brands order by description;";
$result = $con->query($sqlbrand);
while ($rowBrand = $result->fetch_assoc()) {
    if ($row['marca'] != $rowBrand['description']) {
        ?>
    
<option value="<?php echo $rowBrand['id_brands']?>"><?php echo $rowBrand['description']?> </option>
<?php
    }
}
?>   
	</select>


						<div class="form-group">
							<label class="control-label">color</label> <select id="color"
								name="color" class="form-control">
								<option value="<?php echo $row['id_colors']?>">
<?php echo $row['color']?>
</option>
						
						</div>


<?php

$sqlcolors = "select id_colors as idcolors, description as color from colors order by description;";
$result = $con->query($sqlcolors);
while ($rowcolor = $result->fetch_assoc()) {
    if ($row['color'] != $rowcolor['color']) {
        ?>
    
<option value="<?php echo $rowcolor['idcolors']?>"><?php echo $rowcolor['color']?> </option>
<?php
    }
}
?>
</select>
					</div>
					<div class="text-center">
						<br> <input type="submit" class="btn btn-success"
							value="Guardar Producto">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>




