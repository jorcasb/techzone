<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TechZone</title>
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
  <link href="assets/css/table.css" rel="stylesheet">

</head>

<body>

  <?php 
      include("conexion.php");
    ?>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <h1>TechZone</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" >Home</a></li>
          <li><a href="computo.php">Computo</a></li>
          <li><a href="videojuegos.php">Videojuegos</a></li>
          <li><a href="multimedia.php">Multimedia</a></li>
          <li><a href="contact.php">Contacto</a></li>
          <li><a class="get-a-quote" href="get-a-quote.php">Get a Quote</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Solicitar Productos</h2>
              <p>¡Bienvenido a nuestra sección de "Solicitar Productos"! Aquí podrás ir más allá de nuestro catálogo y solicitar productos que te interesen y no estén disponibles en nuestra tienda.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Solicitar Productos</li>
          </ol>
        </div>
      </nav>
    </div>

    <section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                            <?php 
                              require("conexion.php");

                              $sql = $conexion->query("SELECT * FROM productos
                              INNER JOIN categorias ON productos.CategoriaId = categorias.idCategoria
                              INNER JOIN info ON productos.InfoId = info.idInfo");

                              while ($resultado = $sql->fetch_assoc()) {
                            ?>
                      <tr>
                      <td scope="row"><?php echo $resultado['nombre'] ?></td>
                        <td scope="row"><?php echo $resultado['NombreCategoria'] ?></td>
                        <td scope="row"><?php echo $resultado['NombreInfo'] ?></td>
                        <td scope="row"><?php echo $resultado['descripcion'] ?></td>
                        <td scope="row"><?php echo $resultado['fecha'] ?></td>
                        <td>
                          <a href="EditarForm.php?Id=<?php echo $resultado['id']?>" class="button-editar"></a>
                        </td>
                        <td>
                          <a href="formularios/EliminarDatos.php?Id=<?php echo $resultado['id']?>" class="button-eliminar"></a>
                        </td>
                      </tr>
                      <?php  
                        }
                        ?>
                    </tbody>
                  </table>

                        

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<div class="d-flex align-items-center justify-content-center" style="height:70px;">
<a href="AgregarForm.php" class="button-agregar">Agregar Producto</a>
</div>
    </section>

  </main>

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