<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TechZone 🖥</title>
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
          <li><a href="index.php">Home</a></li>
          <li><a href="computo.php">Computo</a></li>
          <li><a href="videojuegos.php">Videojuegos</a></li>
          <li><a href="multimedia.php" class="active">Multimedia</a></li>
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
              <h2>Multimedia</h2>
              <p>Tenemos una amplia selección de productos multimedia que satisfacerán todas tus necesidades de entretenimiento y tecnología. Trabajamos con los principales fabricantes y proveedores de productos multimedia para garantizar una buena compra.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Multimedia</li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Productos Más Solicitados</span>
          <h2>Productos Más Solicitados</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/multimedia/tv_lg.jpeg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">LG OLED65C1PUB</a></h3>
              <p>Televisor OLED de 65 pulgadas con resolución 4K, tecnología de inteligencia artificial ThinQ AI, compatible con HDR Dolby Vision, Dolby Atmos, y webOS 6.0 para una experiencia de visualización inmersiva.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/multimedia/aur_sony.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Sony WH-1000XM4</a></h3>
              <p>Auriculares inalámbricos con cancelación de ruido líder en la industria, sonido envolvente, sensor de proximidad, batería de larga duración y compatibilidad con asistentes de voz.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/multimedia/prl_bose.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Bose SoundLink Revolve+</a></h3>
              <p>Parlante Bluetooth portátil con sonido envolvente de 360 grados, resistente al agua, batería de hasta 16 horas de reproducción, micrófono incorporado para realizar llamadas y asistente de voz integrado.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/multimedia/mcr_rode.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Rode NT-USB</a></h3>
              <p>Micrófono de estudio USB con calidad de sonido profesional, patrón polar cardioide, control de mezcla de auriculares y compatibilidad con PC, Mac y dispositivos iOS.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/multimedia/tvsony.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Sony XBR65X900H</a></h3>
              <p>Televisor LED de 65 pulgadas con resolución 4K Ultra HD, compatible con HDR10, HLG y Dolby Vision, con tecnología de mejora de imagen X1 y sistema operativo Android TV para acceder a una amplia variedad de contenido.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/multimedia/aur_apple.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Apple AirPods Pro</a></h3>
              <p>Auriculares inalámbricos con cancelación de ruido adaptativa, ajuste personalizable, resistencia al agua y al sudor, estuche de carga inalámbrica y acceso rápido a Siri.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Preguntas Frecuentes</span>
          <h2>Preguntas Frecuentes</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Qué marcas de productos vendes en tu tienda de productos multimedia?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Vendemos marcas reconocidas como LG, Sony, Samsung, Sonos, JBL, Bose, Sony, Apple, Shure, Audio-Technica y Rode en nuestra tienda de productos multimedia.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Ofreces garantía en tus productos?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Sí, ofrecemos garantía en todos nuestros productos. Nuestra garantía cubre defectos de fabricación y brinda soporte para asegurar la satisfacción del cliente.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Con qué frecuencia traes nuevos productos a tu tienda?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Constantemente actualizamos nuestro inventario con nuevos productos emocionantes. Traemos nuevas incorporaciones a nuestra tienda de productos multimedia cada mes, para que siempre encuentres lo último en tecnología y entretenimiento. ¡Mantente atento a nuestras novedades!
                  </div>
                </div>
              </div>


            </div>

          </div>
        </div>

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