<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Flores</title>
	<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">

</head>
<body>
	<?php $page = 'contacto'; include 'includes/navbar.php'; ?>

    <div class="row justify-content-center pb-5">
        <h3 class="text-center">Contactanos</h3>
        <div class="contact-box">
            <form action="">
                <input type="text" class="input-field" placeholder="Nombre completo">
                <input type="email" class="input-field" placeholder="Correo">
                <input type="text" class="input-field" placeholder="Tema">
                <textarea type="text" class="input-field textarea-field" placeholder="Escribe tu duda o pregunta." name="" id="" cols="30" rows="10"></textarea>
                <button type="button" class="btn">Enviar Mensaje</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <h3 class="text-center">Ubicación</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7526.462166464822!2d-98.04565730000004!3d19.402419099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smx!4v1638894098183!5m2!1sen!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

	<?php include 'includes/footer.php'; ?>	
</body>
</body>
</html>