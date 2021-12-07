<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Flores</title>
	<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">

</head>
<body>
	<?php $page = 'catalogo'; include 'includes/navbar.php'; ?>

    <div class="container" style="padding-top:10px">
        <div class="row justify-content-center text-center">
            <div class="col-10 py-5 pt-5">
                <h2>Catalogo</h2>
                <p class="lead">Este es un catalogo de ejemplo, deberia tener alguna descripcion sobre la tienda y/o los articulos que esta presentando.</p>
            </div>
        </div>
    </div>

    <div class="card-group" style="margin: 0 50px 50px 50px;">
        <div class="card text-white bg-dark mb-3" style="width: 18rem;">
            <img src="img/plants/white.jpg" class="card-img-top" alt="Flores Blancas">
            <div class="card-body">
                <h5 class="card-title">Flores Blancas</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum architecto ullam magni labore perspiciatis. Vitae voluptate saepe quisquam omnis ipsum eligendi et voluptatibus, possimus est molestiae, vero animi recusandae. Excepturi!</p>
            </div>
        </div>

        <div class="card text-white bg-dark mb-3" style="width: 18rem;">
            <img src="img/plants/tree.jpg" class="card-img-top" alt="Arbolito">
            <div class="card-body">
                <h5 class="card-title">Arbolito</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ipsam officia molestias, voluptas eius quod laudantium officiis! Nihil perferendis dolorum explicabo repellendus quis obcaecati repellat, sit a enim, reiciendis nam?</p>
            </div>
        </div>

        <div class="card text-white bg-dark mb-3" style="width: 18rem;">
            <img src="img/plants/pine.jpg" class="card-img-top" alt="Pino">
            <div class="card-body">
                <h5 class="card-title">Pino</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet sapiente pariatur, ex saepe rem aut numquam repellendus recusandae laboriosam fugit expedita, quisquam odit repudiandae quae unde ipsam! Totam, asperiores fuga!</p>

            </div>
        </div>

        <div class="card text-white bg-dark mb-3" style="width: 18rem;">
            <img src="img/plants/pot.jpg" class="card-img-top" alt="Maceta">
            <div class="card-body">
                <h5 class="card-title">Maceta</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, similique aspernatur! Cumque quis, amet perspiciatis delectus voluptatem placeat. Fugit sed nostrum quam aperiam voluptatem repudiandae unde, fugiat ex officia aspernatur.</p>

            </div>
        </div>
    </div>

	<?php include 'includes/footer.php'; ?>	
</body>
</body>
</html>