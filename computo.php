<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TechZone</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
          <li><a href="computo.php" class="active">Computo</a></li>
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
    <header>
        <video src="assets/img/computo/video.mp4" class="vid-bg" autoplay loop muted></video> 

       
    </header> 
    <style>
          .vid-bg {
        position: relative;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
      }
	

    </style>

      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Computacion</li>
            
          </ol>
          
        </div>
      </nav>
    </div>


    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Lo ultimo en tecnologia</span>
          <h2>Lo ultimo en tecnologia</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/all in one.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>All in one HP 240 G9 23.8" Full HD, Intel Core i5-1235U, 256GB ssd/16GB ram,teclado español, FreeDos</h4>
                <span>Descripcion</span>
                <p>
                                  
                  Procesador:Intel Core i5
                  Detalle del procesador:Intel Core i5-1235U
                  Procesador gráfico:UWVA
                  Tamaño de pantalla: 23.8"
                  
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/audifonos.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Audífonos gamer Teraware4gaming Blackout conexión 3.5 mm, aislamiento de ruido, compatible PC y consolas</h4>
                <span>Descripcion</span>
                <p>
                
                        Tipo de audífonos: Gamer
                        Conectividad: Alámbrico
                        Interfaz: Jack 3.5
                        Impedancia (Ohmios): 32 Ohm
                        
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/brateck.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Escritorio Brateck eléctrico 220v + tablero 150 x 75 x 2.5 cms, color paulownia</h4>
                <span>Descripcion</span>
                <p>
                                  
                  Material de la estructura:Escritorio: acero y plástico y tablero: MDF
                  Incluye armado:No
                  Capacidad de peso:80 kg
                  Espesor de la mesa:2.5 cm
                 
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/camara web.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Cámara web Logitech B2B-C930E FHD, usb, micrófono integrado, cable 1.5 m</h4>
                <span>Descripcion</span>
                <p>
                
                  Interfaz: USB
                  Resolución de videos: 1080p
                  Campo de visión: 90°
                  Micrófono integrado: Sí
                  
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/disco duro.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Disco duro externo Toshiba Canvio Basic 1TB, USB 3.0</h4>
                <span>Descripcion</span>
                <p>
                
                    Tipo:Externos
                    Capacidad:1 TB
                    Requisitos del sistema:Formato para Microsoft Windows 10, Windows 8.1 y Windows 7, 
                    Interfaz:USB 3.0 (compatible con USB 2.0)
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/gabinete.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>  Gabinete Gamer RGB LED Micronics Quantum C808</h4>
                <span>Descripcion</span>
                <p>
              
                    Material Case:Vidrio templado
                    Soporta ventiladores:Sí
                    Ventiladores frontales:Sí
                    Ventiladores posteriores:Sí
                   
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/impresora.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Impresora multifuncional Epson Ecotank L3250, inalámbrica con tanques de tinta</h4>
                <span>Descripcion</span>
                <p>
                
                    Tecnología de impresión:Inyección
                    Wi-Fi:Sí
                    Escáner:Sí
                    Resolución de escáner (dpi):Resolucion optica/maxima: 1.200dpi x 2.400dpi
                   
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/laptop.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Laptop HP 250 G9 HD 15.6”, Intel Core i5-1235U, 512GB ssd, 8GB ram, FreeDos</h4>
                <span>Descripcion</span>
                <p>
                
                                      Procesador:Intel Core i5
                          Detalle del procesador:Intel Core i5-1235U
                          Capacidad de Disco sólido (SSD):512 GB
                          Procesador gráfico:Intel
                          
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/memoria ram.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Memoria ram Kingston Fury Beast 8GB (1x8GB), DDR4, 3200Mhz, CL14</h4>
                <span>Descripcion</span>
                <p>
                
                    Tipo: PC escritorio
                    Capacidad memoria: 8GB
                    Requisitos del sistema: Slot DDR4
                    Interfaz: DDR4
                   
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/microfono.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4> Micrófono Teraware JTHT101, conexión 3.5 mm, 16Hz - 20000Hz, cable 1.6 metros, negro</h4>
                <span>descripcion</span>
                <p>
               
                    Tipo de conector:Jack 3.5 mm
                    Respuesta de frecuencia:16Hz - 20000Hz
                    Sensibilidad:-43 a 46 dB
                    Impedancia:200 Ohms
                    
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/monitor.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Monitor plano 21.5" AOC E2270SWHN Panel TN, 1920 x 1080, 60Hz, 5ms, color negro</h4>
                <span>Descripcion</span>
                <p>
                
                    Formato de Panel: Plano
                    Tamaño de monitor: 21.5"
                    Resolución de pantalla: FHD (1920 x 1080)
                    Tasa de refresco: 60 Hz
                   
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/mouse.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Mouse gamer inalámbrico Logitech G502 Lightspeed, bluetooth, 16000 dpi, 11 botones, recargable, luces RGB</h4>
                <span>Descripcion</span>
                <p>
                                    Color: Negro
                    Conectividad: Inalámbrico
                    Interfaz: USB
                    Detalle de DPI: 16000 dpi
                   
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/placa madre.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4> Placa Madre Asrock A320M/AC WIFI, DDR4, M.2, AM4</h4>
                <span>Descripcion</span>
                <p>
               
                    Socket de cpu: AM4
                    Chipset: AMD A320
                    Tipo de RAM: DDR4
                    RAM máxima: 32 GB
                 
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/procesador.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Procesador AMD Ryzen 5 4600G, 3.7Ghz, 6 cores, AM4</h4>
                <span>Descripcion</span>
                <p>
                
                    Nombre de procesador: Ryzen 5
                    Número de procesador: 4600G
                    Velocidad base del reloj: 3.7Ghz
                    Socket de cpu: AM4
                    
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/router.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Router TP-Link N300 inalámbrico, banda 2.4 GHz, 300 mbps, 4 puertos LAN, 2 antenas 9Dbi</h4>
                <span>Descripcion</span>
                <p>
                
                  Tipo: Routers
                  Número de puertos LAN: x4
                  Frecuencia inalámbrica: 2.4 GHz
                  Interfaz: 4 puertos LAN 10/100 mbps, 1 puerto WAN 10/100 mbps
                 
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/silla.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Silla gamer racing Technisport, tapiz cuero pu, resiste un máx. 120 kg, negro con azul</h4>
                <span>Descripcion</span>
                <p>
                
                    Color: Azul
                    Capacidad de carga máxima: 120 kg
                    Regulación de altura: Sí
                    Material del relleno: Espuma de Poliuretano (PU)
                   
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/sistema refrigeracion.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sistema de refrigeración líquida MSI MPG Coreliquid K360, 360mm, 3-FAN, pantalla LCD 2.4"</h4>
                <span>Descripcion</span>
                <p>
                
                      Ventiladores: para PC
                      Dimensiones del ventilador: 120 x 120 x 25 mm
                      Velocidad del ventilador: 0 ~ 2500 RPM
                      Esperanza de vida: 100.000 horas
                     
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/switch.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Switch conmutador Tp Link ethernet, 5 puertos megabits 10/100 mbps</h4>
                <span>Desccripcion</span>
                <p>
                
                    Tipo:Switchs
                    Interfaz:Puertos de 5 10/100 mbps RJ45, negociación AUTO/AUTO MDI/MDIX
                    Requisito de sistema:Microsoft Windows 8/7/Vista/XP , MAC OS, NetWare, UNIX or Linux.
                    Certificación:FCC, CE, RoHs
                   
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/computo/teclado.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Teclado gamer Teraware4gaming, mecánico, alámbrico, conexión usb, 87 teclas y luces RGB</h4>
                <span>Desccripcion</span>
                <p>
                
                    Tipo de teclado: Mecánico
                    Conectividad: USB Alámbrico
                    Interfaz: USB
                    Switch: Sí
                    
                </p>
                <button type="button" class="btn btn-warning">Comprar</button>
              </div>
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
                <h3>Juan Carlos Cayo</h3>
                <h4>Estudiante</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                    En TECHZONE encuentro los equipos necesarios para realizar mis trabajos en la universidad, ademas tienen un descuento especial para estudiantes.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Youtuber</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  TECHZONE cuenta con lo ultimo en componentes de striming y perifericos, sin duda alguna ofrecen lo ultimo para mis grabaciones.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Ariana Plaza</h3>
                <h4>Gamer Influencer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                    En TECHZONE potencie mi pasion por los videojuegos, ellos me ofrecen las mejores marcas en componentes gaming. Lo recomiendo mucho a la comunidad dotera.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

           

           

          </div>
          <div class="swiper-pagination"></div>
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