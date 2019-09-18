<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Curiosidades</title>
		<link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">
		<link rel="stylesheet" href="estilos.css">
		
	</head>

	<body >
    <div class="tarjetas">

        <form action="procesar.php" method="get">

            <label for="apellido"> apellido </label>
            <input type="text" name="apellido" id="">

            <label for="nombre"> nombre </label>
            <input type="text" name="nombre" id="">

            <label for="edad"> edad </label>
            <input type="text" name="edad" id="">

            <label for="favorito"> personaje favorito </label>
            <input type="text" name="favorito" id="">

            <input type="submit">
        </form>


	
        <div class="container-fluid" class="tarjeta_usuario">
                    <div class="row">
                        <div class="col-md-4 class="tarjeta_usuario"">
                            <img alt="Bootstrap Image Preview" src="bart_tarjeta.jpg" />
                            <h2>
                                Heading
                            </h2>
                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <p>
                                <a class="btn" href="#">View details »</a>
                            </p>
                        </div>
                        <div class="col-md-4 class="tarjeta_usuario"">
                            <img alt="Bootstrap Image Preview" src="bart_tarjeta.jpg" />
                            <h2>
                                Heading
                            </h2>
                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <p>
                                <a class="btn" href="#">View details »</a>
                            </p>
                        </div>
                        <div class="col-md-4" class="tarjeta_usuario">
                            <img alt="Bootstrap Image Preview" src="bart_tarjeta.jpg" />
                            <h2>
                                Heading
                            </h2>
                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <p>
                                <a class="btn" href="#">View details »</a>
                            </p>
                        </div>
                    </div>
            </div>
         </div>




	</body>
</html>