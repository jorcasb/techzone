<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Service Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>


  <section class="intro">
  <div class="container">
  <form action="formularios/insertarDatos.php" method="POST">

            <div class="mb-3">
				<label class="form-label">Nombre</label>
				<input type="text" class="form-control" name="nombre">
			</div>

			<label for="">Categoría</label>
			<select name="categoria" class="form-select mb-3">
				<option selected disabled>--Seleccionar categoría--</option>
				<?php  
					include ("conexion.php");

					$sql = $conexion->query("SELECT * FROM categorias");
					while ($resultado = $sql->fetch_assoc()){
						echo "<option value='".$resultado['idCategoria']."'>".$resultado['NombreCategoria']."</option>";
					}
				?>
			</select>

			<label for="">Producto</label>
			<select name="producto" class="form-select mb-3">
				<option selected disabled>--Seleccionar producto--</option>
				<?php  
					include ("conexion.php");

					$sql = $conexion->query("SELECT * FROM info");
					while ($resultado = $sql->fetch_assoc()){
						echo "<option value='".$resultado['idInfo']."'>".$resultado['NombreInfo']."</option>";
					}
				?>
			</select>

			<div class="mb-3">
				<label class="form-label">Descripción</label>
				<input type="text" class="form-control" name="descripcion">
			</div>

			<div class="text-center">
				<button type="submit" class="btn btn-success">Enviar</button>
				<a class="btn btn-danger" href="get-a-quote.php">Regresar</a>
			</div>
		</form>
        </div>
  </section>


  <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info">
      <a href="index.php" class="logo d-flex align-items-center">
        <span>TechZone</span>
      </a>
      <p>Somos tu destino tecnológico de confianza, donde encontrarás una amplia gama de productos y servicios para satisfacer tus necesidades tecnológicas y de entretenimiento.</p>
      <div class="social-links d-flex mt-4">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Enlaces útiles</h4>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de nosotros</a></li>
        <li><a href="#">Preguntas Frecuentes</a></li>
        <li><a href="#">Preguntas de privacidad</a></li>
        <li><a href="#">Soporte Tecnico</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Nuestros servicios</h4>
      <ul>
        <li><a href="#">Computadoras y portátiles</a></li>
        <li><a href="#">Consolas y videojuegos</a></li>
        <li><a href="#">Productos multimedia</a></li>
        <li><a href="#">Accesorios tecnológicos</a></li>
        <li><a href="#">Reparación y mantenimiento</a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Contáctanos</h4>
      <p>
        Calle Lima <br>
        123<br>
        Peru <br><br>
        <strong>Número de teléfono:</strong> +1 5589 55488 55<br>
        <strong>Correo electrónico:</strong> info@techzone.com.pe<br>
      </p>

    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; Copyright <strong><span></span></strong>. All Rights Reserved
  </div>
  <div class="credits">
     Examen Final - Programacion Web I
  </div>
</div>

</footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>