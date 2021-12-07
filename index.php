<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jardineria Flores</title>
	<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">

</head>
<body>
	<?php $page = 'inicio'; include 'includes/navbar.php'; ?>

	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner" style="max-width: 80%; margin-left: auto; margin-right: auto; $carousel-transition-duration: .6s;">
			<div class="carousel-item active">
				<img src="img/plants/luna3.jpg" class="d-block w-100" alt="luna3">
			</div>
			<div class="carousel-item">
				<img src="img/plants/swan_right.jpg" class="d-block w-100" alt="swan_right">
			</div>
			<div class="carousel-item">
				<img src="img/plants/lily2.jpg" class="d-block w-100" alt="lily2">
			</div>
			<div class="carousel-item">
				<img src="img/plants/luna1.jpg" class="d-block w-100" alt="luna1">
			</div>
			<div class="carousel-item">
				<img src="img/plants/orange.jpg" class="d-block w-100" alt="orange">
			</div>
			<div class="carousel-item">
				<img src="img/plants/fruit.jpg" class="d-block w-100" alt="fruit">
			</div>
			<div class="carousel-item">
				<img src="img/plants/luna2.jpg" class="d-block w-100" alt="luna2">
			</div>
			<div class="carousel-item">
				<img src="img/plants/avocado_saplins.jpg" class="d-block w-100" alt="avocado_saplins">
			</div>
			<div class="carousel-item">
				<img src="img/plants/swan_left.jpg" class="d-block w-100" alt="swan_left">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previo</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Siguente</span>
		</button>
	</div>

	<?php include 'includes/footer.php'; ?>	
	<script src="bootstrap-5.1.3/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>