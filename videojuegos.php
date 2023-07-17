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
          <li><a href="videojuegos.php" class="active">Videojuegos</a></li>
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
              <h2>Videojuegos</h2>
              <p>Sumérgete en una experiencia de juego inigualable con nuestra amplia selección de títulos y accesorios de videojuegos. En TechZone, nos apasiona ofrecerte lo mejor en entretenimiento digital. Desde los últimos lanzamientos hasta clásicos atemporales, aquí encontrarás todo lo que necesitas para llevar tus habilidades al siguiente nivel. Explora nuestra colección de videojuegos de primera categoría para todas las plataformas populares,consolas de última generación y dispositivos móviles.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Videojuegos</li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-microchip"></i></div>
            <div>
              <h4 class="title">Ultimos lanzamientos</h4>
              <p class="description">Descubre los juegos más emocionantes y anticipados del momento en TechZone. Mantente al día con nuestras actualizaciones regulares sobre los últimos lanzamientos en el mundo de los videojuegos. Desde los títulos más populares hasta las joyas ocultas.</p>
              <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-microchip"></i></div>
            <div>
              <h4 class="title">Guías y consejos</h4>
              <p class="description">Domina tus juegos favoritos con nuestras guías y consejos expertos. Ya sea que necesites mejorar tus habilidades en un juego de disparos en primera persona, desbloquear secretos en un juego de aventuras o desarrollar estrategias ganadoras en juegos de estrategia, nuestro equipo de jugadores experimentados está aquí para ayudarte.</p>
              <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-microchip"></i></div>
            <div>
              <h4 class="title">Comunidad de jugadores</h4>
              <p class="description">Únete a nuestra vibrante comunidad de jugadores en TechZone. Aquí encontrarás un espacio para compartir tu pasión por los videojuegos, conectarte con otros jugadores, participar en debates apasionantes y recibir recomendaciones personalizadas.</p>
              <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Nuestros Productos</span>
          <h2>Nuestros Productos</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/videojuegos/img1.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">PlayStation 4 (PS4)</a></h3>
              <p>Descubre la magia de la consola de videojuegos PlayStation 4 en TechZone. Sumérgete en un mundo de emocionantes experiencias de juego con gráficos impresionantes y una amplia biblioteca de títulos. Nuestros expertos te guiarán a través de las características clave de la PS4.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/videojuegos/img2.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">PlayStation 5 (PS5)</a></h3>
              <p>Experimenta la próxima generación de juegos con la consola PlayStation 5 en TechZone. Con gráficos de vanguardia, tiempos de carga ultrarrápidos y una inmersión sin precedentes, la PS5 te lleva a nuevas alturas en el mundo del entretenimiento interactivo. Descubre nuestras ofertas exclusivas de PS5, que incluyen juegos populares y accesorios complementarios.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/videojuegos/img3.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Xbox One (XONE)</a></h3>
              <p>Explora el emocionante mundo de la consola Xbox One en TechZone. Con su potencia y versatilidad, la Xbox One ofrece una amplia gama de juegos, desde éxitos de taquilla hasta títulos indie aclamados por la crítica. Aprovecha las características únicas de la Xbox One, como la compatibilidad con 4K, Xbox Game Pass y Xbox Live Gold.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/videojuegos/img7.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">PS Vita</a></h3>
              <p>Disfruta de la portabilidad y la diversión en movimiento con la consola portátil PS Vita en TechZone. Con su impresionante pantalla táctil y capacidades de juego en línea, la PS Vita te permite llevar tus juegos favoritos contigo a donde quiera que vayas.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/videojuegos/img9.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Nintendo Switch</a></h3>
              <p>Sumérgete en la versatilidad de la consola híbrida Nintendo Switch en TechZone. Con la capacidad de jugar tanto en modo portátil como en modo de sobremesa, el Nintendo Switch ofrece una experiencia de juego únicas.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/videojuegos/img11.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Wii U</a></h3>
              <p>Descubre la innovación y la diversión en familia con la consola Wii U en TechZone. La Wii U ofrece una experiencia de juego única, combinando la diversión clásica de Nintendo con nuevas formas de interactuar.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Experiencia y calidad garantizadas.</h3>
            <p class="fst-italic">
            En TechZone, nos enorgullece ofrecer una experiencia de compra excepcional y productos de alta calidad. Nuestro equipo está compuesto por expertos en tecnología y videojuegos que se mantienen actualizados con las últimas tendencias del mercado.
            </p>
            <p >
            Trabajamos con los principales fabricantes y distribuidores para asegurarnos de que nuestros productos sean genuinos y cumplan con los estándares de calidad. Además, ofrecemos garantía en todos nuestros productos para brindarte tranquilidad y respaldo.
            </p>
        
          </div>
        </div>

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="https://images.unsplash.com/photo-1528901166007-3784c7dd3653?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Variedad y exclusividad</h3>
            <p class="fst-italic">
            Encontrarás una amplia gama de productos en TechZone, desde las consolas de videojuegos más populares hasta los últimos títulos y accesorios. Nos esforzamos por tener en stock una variedad de opciones para que puedas encontrar exactamente lo que estás buscando.
            </p>
            <p>
            Además, también nos destacamos por ofrecer productos exclusivos y ediciones limitadas que no encontrarás en otros lugares. En TechZone, queremos asegurarnos de que tengas acceso a lo mejor y lo más novedoso del mundo de la tecnología y los videojuegos.

            </p>
          </div>
        </div>

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="https://images.unsplash.com/photo-1543269865-0a740d43b90c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Los mejores precios</h3>
            <p>En TechZone, entendemos la importancia de obtener productos de calidad a precios asequibles. Nos esforzamos por ofrecer los mejores precios del mercado para que puedas disfrutar de tus productos favoritos sin gastar de más. Regularmente monitoreamos y ajustamos nuestros precios para mantenerte actualizado con las mejores ofertas y promociones. Además, también ofrecemos opciones de financiamiento y paquetes especiales para que puedas obtener lo que necesitas sin comprometer tu presupuesto.
            </p>
          </div>
        </div>

      </div>
    </section>

    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Preguntas Frequentes</span>
          <h2>Preguntas Frequentes</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Cuáles son las opciones de pago que ofrecen en TechZone?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  En TechZone, ofrecemos diversas opciones de pago, que incluyen tarjetas de crédito/débito, transferencias bancarias y pagos en efectivo en nuestra tienda física. También brindamos la opción de financiamiento en ciertos productos para mayor comodidad. Puedes encontrar más detalles sobre las opciones de pago disponibles durante el proceso de compra.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Cuánto tiempo tarda en llegar mi pedido?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  El tiempo de entrega puede variar según tu ubicación y el tipo de producto. Sin embargo, generalmente nos esforzamos por procesar y enviar los pedidos dentro de las 24 a 48 horas posteriores a la confirmación del pago. Una vez enviado, el tiempo de entrega estimado dependerá del servicio de mensajería utilizado. Te proporcionaremos un número de seguimiento para que puedas rastrear tu paquete.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Ofrecen garantía en sus productos?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Sí, en TechZone ofrecemos garantía en todos nuestros productos. La duración de la garantía puede variar según el fabricante y el tipo de producto, y generalmente se indica en la descripción del producto o en la documentación adjunta. Si experimentas algún problema con tu compra dentro del período de garantía, comunícate con nuestro equipo de atención al cliente para que podamos asistirte.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Puedo devolver o cambiar un producto si no estoy satisfecho?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Sí, en TechZone entendemos que las necesidades y preferencias pueden cambiar. Si no estás satisfecho con tu compra, ofrecemos la posibilidad de devolver o cambiar un producto dentro de un plazo determinado. Sin embargo, es importante tener en cuenta que existen ciertas condiciones y restricciones para los productos que pueden ser devueltos o cambiados. Te recomendamos revisar nuestra política de devoluciones y cambios o comunicarte con nuestro equipo de atención al cliente para obtener más información..
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Tienen servicio de atención al cliente para brindar asistencia adicional?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Sí, en TechZone contamos con un equipo de atención al cliente dedicado para brindarte asistencia adicional. Puedes comunicarte con nosotros a través de nuestro número de teléfono o correo electrónico proporcionado en nuestra página de contacto. Nuestro amable equipo estará encantado de ayudarte con cualquier pregunta, inquietud o consulta que puedas tener relacionada con nuestros productos, servicios o tu experiencia de compra.
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