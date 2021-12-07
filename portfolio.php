<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<title>Portafolio Flores</title>
		<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet">

	</head>
    <body>
		<?php $page = 'portafolio'; include 'includes/navbar.php'; ?>

        <div class="container py-3">
            <div class="row justify-content-center py-5">
                <div class="col-lg-6">
                    <h3 class="pb-4">Conoce al creador del sitio web</h3>
                    <p>Soy estudiante en la UTT (portada a la derecha) y este es un prototipo de un sitio web.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit expedita perferendis ea libero, voluptatem enim omnis, quam recusandae animi facere molestiae impedit incidunt vitae explicabo consequatur autem asperiores fuga deleniti.</p>
                </div>
                <div class="col-lg-6"><img class="img-fluid" src="img/portfolio.png"></div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>