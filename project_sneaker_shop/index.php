<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link
	href="https://fonts.googleapis.com/css?family=Oswald|Quattrocento&display=swap"
	rel="stylesheet">
<link rel="stylesheet" href="css/main.css" />

</head>

<body>
	<header>
		<h1>GALERIA DE PRODUCTOS</h1>
		<hr>
	</header>
	<section id="main">

		<ul class="gallery">
	
	<?php 
	include_once 'includes/db.php';
	$con = openCon('config/db_products.ini');
	$con -> set_charset("utf8mb4");
	
	$sql="SELECT s.model as model,s.price as price,s.image as image,s.obervation as  obervation,b.description as brands, c.description as color ,date_format(s.initial_date,'%d-%m-%Y') as date FROM sneakers s INNER JOIN brands b ON s.id_brands=b.id_brands INNER JOIN colors c ON s.id_colors=c.id_colors ORDER BY s.initial_date;";
	$result=$con->query($sql);
	while ($row=$result->fetch_assoc())
	{
	    
	
	    
	?>
	<li>
				<div class="box">
					<figure>
						<img src="<?php echo  substr($row['image'],3)?>">
						<figcaption>
						<h3><?php echo $row['brands'].' /'. $row['model']. '<br>'. $row['color']  ?></h3>	
						<p><?php echo '$'. $row['price'] ?></p>
						<time><?php echo $row['date'] ?></time>
						
						</figcaption>
					</figure>
				</div>
			</li>
<?php
}
?>

		</ul>
		
		<!--  
		<ul class="gallery">
			<li>
				<div class="box">
					<figure>
						<img src="images/Adidas_10K.jpg" alt="">
						<figcaption>
							<h3>Adidas 10k</h3>
							<p>$2.500</p>
							<time>09/01/2018</time>
						</figcaption>
					</figure>
				</div>
			</li>
			<li>
				<div class="box">
					<figure>
						<img src="images/Converse_CTA_Street_High.jpg" alt="">
						<figcaption>
							<h3>Converse Street</h3>
							<p>$2.350</p>
							<time>05/09/2018</time>
						</figcaption>
					</figure>
				</div>
			</li>
			<li>
				<div class="box">
					<figure>
						<img src="images/Converse_Zakim.jpg" alt="">
						<figcaption>
							<h3>Converse Zakim</h3>
							<p>$3.000</p>
							<time>08/11/2018</time>
						</figcaption>
					</figure>
				</div>
			</li>
			<li>
				<div class="box">
					<figure>
						<img src="images/Fila_Revolution.jpg" alt="">
						<figcaption>
							<h3>Fila Revolution</h3>
							<p>$3.500</p>
							<time>05/02/2019</time>
						</figcaption>
					</figure>
				</div>
			</li>
			<li>
				<div class="box">
					<figure>
						<img src="images/Lacoste_Strideur_116.jpg" alt="">
						<figcaption>
							<h3>Lacoste Strideur</h3>
							<p>$4.000</p>
							<time>25/05/2019</time>
						</figcaption>
					</figure>
				</div>
			</li>
			<li>
				<div class="box">
					<figure>
						<img src="images/New_Balance_MS574CD.jpg" alt="">
						<figcaption>
							<h3>New Balance MS</h3>
							<p>$5.000</p>
							<time>29/06/2019</time>
						</figcaption>
					</figure>
				</div>
			</li>
			<li>
				<div class="box">
					<figure>
						<img src="images/Nike_Air_Max_Advantage.jpg" alt="">
						<figcaption>
							<h3>Nike Advantage</h3>
							<p>$3.800</p>
							<time>11/02/2019</time>
						</figcaption>
					</figure>
				</div>
			</li>
			<li>
				<div class="box">
					<figure>
						<img src="images/Nike_Downshifter_7.jpg" alt="">
						<figcaption>
							<h3>Nike Downshifte</h3>
							<p>$4.800</p>
							<time>10/06/2019</time>
						</figcaption>
					</figure>
				</div>
			</li>
			<li>
				<div class="box">
					<figure>
						<img src="images/Nike_Md_Runner_2.jpg" alt="">
						<figcaption>
							<h3>Nike Md Runner 2</h3>
							<p>$5.000</p>
							<time>08/11/2018</time>
						</figcaption>
					</figure>
				</div>
			</li>
		</ul>
		-->
	</section>
	<footer>
		<hr>
		<h3 id="footer-text">Copyright 2019</h3>
	</footer>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<div class="arrow">
		<a id="toTop" href="#"> <img src="images/backToTop.png" alt="" /> <img
			class="images/backToTop" alt="" />
		</a>
	</div>
	<script src="js/arrow.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>

</body>
</html>