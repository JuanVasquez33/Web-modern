<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="header" id="inicio">
        <img src="imagenes/menu.svg" alt="Menú" class="hamburguesa">
        <nav class="menu-navegacion">
            <a href="#Inicio">Inicio</a>
            <a href="#Servicio">Servicio</a>
            <a href="#Portafolio">Portafolio</a>
            <a href="#Expertos">Expertos</a>
            <a href="#Contactos">Contactos</a>
        </nav>
        <div class="contenedor head">
            <h1>Convertimos tus sueños en realidad</h1>
            <p class="copy">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
    </header>
    <main>
        <section class="services contenedor" id="Servicio">
            <h2 class="subtitulo">Nuestro servicio</h2>
            <div class="contenedor-servicio">
                <img src="imagenes/halloween1-mediano.jpg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><sepan class="number">1</sepan>Diseño Web</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dignissimos odit enim, ab consequuntur autem odio vero perferendis aliquam voluptates!</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><sepan class="number">2</sepan>Diseño Web</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dignissimos odit enim, ab consequuntur autem odio vero perferendis aliquam voluptates!</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><sepan class="number">3</sepan>Diseño Web</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dignissimos odit enim, ab consequuntur autem odio vero perferendis aliquam voluptates!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="portfolio">
            <div class="contenedor">
                <h2 class="subttitulo">Galeria</h2>
                <div class="contenedor-galeria">
                    <img src="imagenes/img1.jpg" alt="" class="img-galeria">
                    <img src="imagenes/img2.jpg" alt="" class="img-galeria">
                    <img src="imagenes/img3.jpg" alt="" class="img-galeria">
                    <img src="imagenes/img4.jpg" alt="" class="img-galeria">
                    <img src="imagenes/img5.jpg" alt="" class="img-galeria">
                    <img src="imagenes/img6.jpg" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <!-- <section class="imagen-light">
            <img src="imagenes/closeLight.svg" alt="">
            <img src="" alt="" class="agregar-imagen">
        </section> -->
        <section class="contenedor" id="Expertos">
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="expert">
                <div class="cont-expert">
                    <img src="imagenes/desing.png" alt="">
                    <h3 class="n-expert">Design</h3>
                </div>
                <div class="cont-expert">
                    <img src="imagenes/search-engine.svg" alt="">
                    <h3 class="n-expert">SEO</h3>
                </div>
                <div class="cont-expert">
                    <img src="imagenes/security.svg" alt="">
                    <h3 class="n-expert">Security</h3>
                </div>
            </section>
        </section>
    </main>
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-ud">
                <h2 class="brand">Juan Pablo Vasquez</h2>
                <p>Somos expertos en la creacion de tus sueños</p>
            </div>
            <div class="social-media">
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-youtube' ></i>
                </a>
            </div>
        </div>
    </footer>

    <script src="../control/js/menu.js"></script>
    <script src="../control/js/lightbox.js"></script>
</body>
</html>