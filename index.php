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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="computo.php">Computo</a></li>
          <li><a href="videojuegos.php">Videojuegos</a></li>
          <li><a href="multimedia.php">Multimedia</a></li>
          <li><a href="contact.php">Contacto</a></li>
          <li><a class="get-a-quote" href="get-a-quote.php">Get a Quote</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Bienvenido a TechZone: Tu Destino Tecnológico</h2>
          <p data-aos="fade-up" data-aos-delay="100">¡Bienvenido a TechZone! Somos tu destino confiable para todas tus necesidades tecnológicas y de entretenimiento. En TechZone, nos apasiona ofrecerte productos de calidad, soluciones innovadoras y un servicio excepcional. Ya sea que estés buscando computadoras potentes, los últimos videojuegos o productos multimedia para una experiencia inmersiva, estamos aquí para ayudarte a encontrar lo que necesitas.</p>

          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="Busca lo que necesites">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clientes</p>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                <p>Laptops</p>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="55" data-purecounter-duration="1" class="purecounter"></span>
                <p>Videojuegos</p>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
                <p>Dispositivos multimedia</p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section>

  <main id="main">

    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-computer"></i></div>
            <div>
              <h4 class="title">Computadoras potentes para todas tus necesidades</h4>
              <p class="description">Descubre nuestra amplia selección de computadoras de alto rendimiento, diseñadas para satisfacer las demandas de tareas intensivas, edición de video, diseño gráfico y gaming.</p>
              <a href="" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-gamepad"></i></div>
            <div>
              <h4 class="title">Sumérgete en la diversión con nuestros videojuegos</h4>
              <p class="description">Explora nuestra amplia gama de videojuegos para todas las plataformas populares, incluyendo PC, consolas de última generación y dispositivos móviles.</p>
              <a href="" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-computer-mouse"></i></div>
            <div>
              <h4 class="title">Productos multimedia para una experiencia inmersiva</h4>
              <p class="description">Descubre nuestra selección de productos multimedia, incluyendo televisores de alta definición, sistemas de sonido envolvente, proyectores y accesorios para mejorar tu experiencia audiovisual</p>
              <a href="" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="https://images.unsplash.com/photo-1496381273223-e4ad4e99f5b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=RkC0l4iekYo&ab_channel=PlayStation" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>Acerca de nosotros</h3>
            <p>
            En TechZone, estamos comprometidos en ofrecer tecnología de vanguardia, entretenimiento digital y soluciones innovadoras para nuestros clientes. Desde nuestra fundación, nos hemos dedicado a proporcionar productos y servicios de alta calidad que mejoren la vida de las personas y brinden experiencias inigualables.
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Nuestra misión</h5>
                  <p>En TechZone, nuestra misión es satisfacer las necesidades tecnológicas y de entretenimiento de nuestros clientes, ofreciendo productos de calidad, asesoramiento experto y un servicio excepcional. Nos esforzamos por ser líderes en la industria, brindando soluciones innovadoras que se adapten a las demandas en constante evolución del mercado.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Nuestro equipo de expertos</h5>
                  <p>Contamos con un equipo de profesionales apasionados y conocedores de la tecnología y los videojuegos. Nuestro equipo está constantemente actualizado con las últimas tendencias y avances en el campo de la tecnología, lo que nos permite brindar asesoramiento experto y recomendaciones personalizadas a nuestros clientes.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Compromiso con la satisfacción del cliente</h5>
                  <p>La satisfacción del cliente es nuestra máxima prioridad en TechZone. Nos esforzamos por superar las expectativas de nuestros clientes en cada interacción. Desde el momento en que ingresas a nuestra tienda o visitas nuestro sitio web, hasta el momento en que recibes tu pedido y más allá, nos comprometemos a brindarte un servicio excepcional y una experiencia de compra satisfactoria.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>

    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Nuestros Servicios</span>
          <h2>Nuestros Servicios</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="https://images.unsplash.com/photo-1591370874773-6702e8f12fd8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Computadoras y portátiles</a></h3>
              <p>Descubre nuestra selección de computadoras de escritorio y portátiles de marcas líderes en la industria. Ya sea que necesites una potente computadora para tareas intensivas o una portátil para la movilidad, tenemos opciones para adaptarse a tus necesidades. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Consolas y videojuegos</a></h3>
              <p>Sumérgete en el mundo del entretenimiento digital con nuestras consolas de videojuegos y una amplia variedad de títulos para todas las plataformas populares. Desde las últimas consolas de PlayStation y Xbox hasta los juegos más emocionantes.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="https://images.unsplash.com/photo-1615986200762-a1ed9610d3b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=871&q=80" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">
              Productos multimedia</a></h3>
              <p>Mejora tu experiencia audiovisual con nuestra selección de productos multimedia. Desde televisores de alta definición y sistemas de sonido envolvente hasta proyectores y accesorios, en TechZone tenemos todo lo necesario para crear un entorno de entretenimiento inmersivo en tu hogar.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="https://images.unsplash.com/photo-1616248304589-6a3d8d60ad7d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Accesorios tecnológicos</a></h3>
              <p>Complementa tus dispositivos con nuestros accesorios tecnológicos de alta calidad. Ofrecemos una amplia gama de opciones, que incluyen auriculares, altavoces portátiles, teclados, ratones y mucho más.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="https://images.unsplash.com/photo-1616763355548-1b606f439f86?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Componentes y periféricos</a></h3>
              <p>Si estás buscando actualizar o personalizar tu computadora, en TechZone ofrecemos una variedad de componentes y periféricos de calidad. Desde tarjetas gráficas y discos duros hasta monitores y sistemas de refrigeración, tenemos todo lo que necesitas para llevar tu configuración al siguiente nivel.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Servicios de reparación y mantenimiento</a></h3>
              <p>Además de ofrecer productos, en TechZone también brindamos servicios de reparación y mantenimiento para tus dispositivos. Nuestro equipo de técnicos capacitados está listo para solucionar cualquier problema que puedas tener.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>En TechZone, te ofrecemos una amplia gama de productos y servicios de tecnología y entretenimiento de última generación! </p>
            <a class="cta-btn" href="#">Explora Ahora</a>
          </div>
        </div>

      </div>
    </section>

    <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Consejos y trucos tecnológicos</h3>
            <p class="fst-italic">
            Descubre consejos útiles y trucos tecnológicos para aprovechar al máximo tus dispositivos y sacarles el máximo rendimiento. Aprende a optimizar la duración de la batería de tus dispositivos móviles, proteger tu privacidad en línea y mantener tu computadora funcionando sin problemas.
            </p>
            <p>
            Nuestro equipo de expertos compartirá consejos prácticos y trucos ingeniosos para ayudarte a resolver problemas comunes y mejorar tu experiencia tecnológica.
            </p>
          </div>
        </div>

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Tendencias en la industria de la tecnología</h3>
            <p class="fst-italic">
            Mantente al día con las últimas tendencias en la industria de la tecnología, incluyendo avances en inteligencia artificial, realidad virtual, Internet de las cosas (IoT) y más.
            </p>
            <p>
            Explora los últimos dispositivos y gadgets que están transformando nuestra forma de vivir, trabajar y divertirnos. Mantenerte informado sobre las tendencias tecnológicas te permitirá estar a la vanguardia y tomar decisiones más informadas al elegir tus productos y servicios.
            </p>
          </div>
        </div>

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Reseñas de productos</h3>
            <p class="fst-italic">
            Lee nuestras reseñas detalladas de los últimos productos tecnológicos y de entretenimiento, incluyendo computadoras, consolas de videojuegos, dispositivos móviles y más.
            </p>
            <p>Nuestro equipo experto evaluará y analizará a fondo los productos para brindarte información objetiva sobre su rendimiento, características y relación calidad-precio.Las reseñas te ayudarán a tomar decisiones informadas al momento de comprar y te permitirán encontrar el producto perfecto que se ajuste a tus necesidades y preferencias.
</p>
           
          </div>
        </div>

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="https://images.unsplash.com/photo-1573162915939-26f51418051e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=869&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Actualizaciones y noticias de la industria</h3>
            <p class="fst-italic">
            Mantente informado sobre las últimas actualizaciones y noticias de la industria tecnológica y del entretenimiento. Te mantendremos al tanto de los lanzamientos de nuevos productos, eventos importantes, actualizaciones de software y otros acontecimientos relevantes.
            </p>
            <p>
            Nuestro objetivo es mantenerte informado y ser tu fuente confiable de noticias tecnológicas para que puedas estar al tanto de los avances más recientes.
            </p>
          </div>
        </div>

      </div>
    </section>

    <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Precios</span>
          <h2>Precios</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Básico</h3>
              <h4><sup>$</sup>19.99<span> / mes</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Acceso ilimitado a nuestra biblioteca de videojuegos</li>
                <li><i class="bi bi-check"></i> Descuentos exclusivos en juegos y accesorios</li>
                <li><i class="bi bi-check"></i> Soporte técnico por correo electrónico</li>
                <li class="na"><i class="bi bi-x"></i> <span>Actualizaciones regulares de contenido con nuevos lanzamientos</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Acceso a nuestra comunidad de jugadores para participar en eventos y competiciones</span></li>
              </ul>
              <a href="#" class="buy-btn">Compra ahora</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Premium Plan</h3>
              <h4><sup>$</sup>29<span> / mes</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Acceso ilimitado a nuestra biblioteca de videojuegos para PC</li>
                <li><i class="bi bi-check"></i> Descuentos exclusivos en juegos, accesorios y productos multimedia</li>
                <li><i class="bi bi-check"></i> Soporte técnico prioritario por correo electrónico y chat en vivo</li>
                <li><i class="bi bi-check"></i> Actualizaciones frecuentes de contenido con nuevos lanzamientos y títulos exclusivos</li>
                <li><i class="bi bi-check"></i>Acceso prioritario a eventos y competiciones especiales de la comunidad</li>
              </ul>
              <a href="#" class="buy-btn">Compra Ahora</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Ultimate Plan</h3>
              <h4><sup>$</sup>49<span> / mes</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Acceso ilimitado a nuestra biblioteca completa de videojuegos para PC</li>
                <li><i class="bi bi-check"></i> Descuentos exclusivos en juegos, accesorios y productos multimedia de alta gama</li>
                <li><i class="bi bi-check"></i>Soporte técnico prioritario por correo electrónico, chat en vivo y teléfono</li>
                <li><i class="bi bi-check"></i> Actualizaciones frecuentes de contenido</li>
                <li><i class="bi bi-check"></i> Acceso exclusivo a eventos especiales</li>
              </ul>
              <a href="#" class="buy-btn">Compra Ahora</a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Alejandro Rodríguez</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  ¡Increíble experiencia de compra en TechZone! Pedí una computadora portátil y la entrega fue rápida y segura. El equipo de atención al cliente fue muy amable y resolvió todas mis dudas. Estoy muy contenta con mi compra y definitivamente recomendaré TechZone a mis amigos y familiares.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>María López</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Compré una consola PS5 en TechZone y no puedo estar más satisfecho. El proceso de compra fue sencillo y el envío llegó antes de lo esperado. La consola funciona perfectamente y el precio fue muy competitivo. Sin duda, volveré a comprar en TechZone para todas mis necesidades de videojuegos.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Laura Martínez</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  ¡Excelente servicio en TechZone! Adquirí un televisor de alta definición y estoy realmente impresionada con la calidad de imagen. El personal de la tienda fue muy atento y me ayudó a elegir el modelo perfecto para mis necesidades. Definitivamente, TechZone es mi tienda de confianza para productos de tecnología.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Carlos Hernández</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  TechZone superó mis expectativas. Compré un auricular gaming y la calidad del sonido es excepcional. El envío fue rápido y el producto llegó en perfectas condiciones. Además, el equipo de atención al cliente fue muy servicial al responder mis consultas. Estoy muy contento con mi compra y definitivamente volveré a comprar en TechZone.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
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
                    ¿Cuáles son las opciones de envío disponibles?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Ofrecemos diferentes opciones de envío para adaptarnos a tus necesidades. Esto incluye envío estándar y envío express. Durante el proceso de compra, podrás seleccionar la opción de envío que mejor se ajuste a tus preferencias y ubicación.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Cuál es su política de devoluciones y reembolsos?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  En TechZone, queremos garantizar tu satisfacción. Si por alguna razón no estás satisfecho con tu compra, aceptamos devoluciones dentro de los 30 días posteriores a la recepción del producto. Consulta nuestra política de devoluciones y reembolsos en nuestro sitio web para obtener más información sobre el proceso y los requisitos.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Cómo puedo contactar al servicio al cliente de TechZone?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Nuestro equipo de servicio al cliente está listo para ayudarte. Puedes comunicarte con nosotros a través de nuestro número de teléfono de atención al cliente, enviar un correo electrónico a nuestra dirección de contacto o utilizar el formulario de contacto en nuestro sitio web. Estaremos encantados de resolver tus consultas y brindarte la asistencia que necesitas.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Qué métodos de pago aceptan en TechZone?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Aceptamos una amplia gama de métodos de pago para brindarte flexibilidad y comodidad. Puedes pagar con tarjetas de crédito y débito de diferentes emisores, como Visa, Mastercard y American Express. También ofrecemos la opción de pago a través de plataformas seguras en línea, como PayPal y Apple Pay.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Tienen garantía en sus productos?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Sí, en TechZone ofrecemos garantía en todos nuestros productos. La duración de la garantía puede variar según el fabricante y el tipo de producto. Te recomendamos consultar la descripción del producto o comunicarte con nuestro equipo de servicio al cliente para obtener detalles específicos sobre la garantía de un producto en particular.
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