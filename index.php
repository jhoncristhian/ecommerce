<?php

session_start();

if (!isset($_SESSION['logged_in'])) {
    $nav = 'includes/nav.php';
} else {
    $nav = 'includes/navconnected.php';
    $idsess = $_SESSION['id'];
}

require 'includes/header.php';
require $nav; ?>

<style>
    .autocomplete {
        /*the container must be positioned relative:*/
        position: relative;
        display: block;

    }

    .autocomplete-items {
        color: #26a69a;
        font: 16px Roboto, sans-serif;
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding-bottom: 20px;
        padding-top: 20px;
        padding-left: 30px;
        cursor: pointer;
        background-color: #fff;
    }

    .autocomplete-items div:hover {
        /*when hovering an item:*/
        color: #26a69a;
        background-color: #e9e9e9;
    }

    .autocomplete-active {
        /*when navigating through the items using the arrow keys:*/
        background-color: DodgerBlue !important;
        color: #ffffff;
    }
</style>

<div class="container-fluid home" id="top">
    <div class="container search">
        <nav class="animated slideInUp wow" style="margin-bottom:5vh;">
            <div class="nav-wrapper">
                <form method="GET" action="search.php">
                    <div class="input-field">
                        <input id="search" class="searching" type="search" name='searched' required>
                        <label for="search"><i class="material-icons">search</i></label>
                    </div>

                    <div class="center-align">
                        <button type="submit" name="search" class="red waves-light miaw waves-effect btn hide">Search</button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>

<section id="productos" class="slider-box">
    <!-- <button id="anterior" class="boton-navegacion">&#10094;</button> -->
    <ul>
        <li>
            <img src="src/img/dashboard1.png" alt="">
            <div class="texto">
               
                <a href="product.php?id=1" class="button-rounded btn-large waves-effect waves-light">Obtener</a>
                
            </div>
        </li>
        <li>
            <img src="src/img/dashboard4.png" alt="">
            <div class="texto">
            <a href="product.php?id=2" class="button-rounded btn-large waves-effect waves-light">Obtener</a>
               
            </div>
        </li>
        <li>
            <img src="src/img/dashboard3.png" alt="">
            <div class="texto">
                
                <button class="button-rounded btn-large waves-effect waves-light">Obtener</button>
                <a href="product.php?id=3">click</a>
            </div>
        </li>
        <li>
            <img src="src/img/dashboard2.png" alt="">
            <div class="texto">
                <button class="button-rounded btn-large waves-effect waves-light">Obtener</button>
                <a href="product.php?id=4">click</a>
            </div>
        </li>
        <li>
            <img src="src/img/dashboard5.png" alt="">
            <div class="texto">
                <button class="button-rounded btn-large waves-effect waves-light">Obtener</button>
            </div>
        </li>
    </ul>
    <!-- <button id="siguiente" class="boton-navegacion">&#10095;</button> -->
</section>

<section>
<h1>Mi Informe de Power BI</h1>
    <iframe width="800" height="600" src="models/graficos1.pbix" frameborder="0" allowFullScreen="true"></iframe>
</section>

<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="src/img/dashboard1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="src/img/dashboard2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="src/img/dashboard3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->


<!-- <img src="src/img/banner.jpg" alt="" style="max-height:60vh;min-width:98vw;" > -->
    


<!-- <img src="src/img/banner3.jpg" alt="" style="max-height:60vh;min-width:98vw;" > -->

<section class="container-fluid about" id="about">
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <div class="card animated slideInUp wow">
                    <div class="card-image">
                        <img src="src/img/products/grafico.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col s12 m8">
                <h3 class="animated slideInUp wow">Acerca de Nosotros</h3>
                <div class="divider animated slideInUp wow"></div>
                <p class="animated slideInUp wow">
Bienvenido a InfraVision, tu socio en la visualización de datos y análisis estadístico. Nos comprometemos a proporcionar soluciones de vanguardia para empresas de todos los tamaños. Con amplia experiencia en análisis de datos y diseño de dashboards, transformamos tus datos en información clara y accionable. Valoramos la innovación, la precisión y la usabilidad, y nos esforzamos por ofrecer soluciones intuitivas y personalizadas. Nuestra misión es ayudar a las empresas a alcanzar su máximo potencial a través del poder de los datos. ¡Únete a nosotros en InfraVision y descubre el poder de la visualización de datos! </div>

        </div>
    </div>
</section>

<section class="container contact" id="contact">
    <div class="row">
        <form action="https://postmail.invotes.com/send" method="post" id="email_form" class="col s12 animated slideInUp wow">
            <h3 class="animated slideInUp wow">Contactanos</h3>
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="subject" type="text" class="validate">
                    <label for="icon_prefix">Usuario</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="reply_to" type="email" class="validate">
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                </div>
                <div class="input-field col s12 ">
                    <i class="material-icons prefix">message</i>
                    <textarea id="icon_prefix2" class="materialize-textarea" type="text" name="text" rows="4"" style=" resize: vertical;min-height: 8rem;" required></textarea>
                    <label for="icon_prefix2">Tu mensaje</label>
                </div>
         
                <input type="hidden" name="access_token" value="" />
                <input type="hidden" name="success_url" value="." />
                <input type="hidden" name="error_url" value=".?err=1" />
                <div class="center-align">
                    <button id="submit_form" type="submit" name="contact" value="Send" class="button-rounded btn-large waves-effect waves-light">Enviar</button>
                </div>
                <p>Powered by <a href="" target="_blank">InfraVision</a></p>
            </div>
        </form>
    </div>
</section>

<!-- <img src="src/img/banner2.jpg" alt="" style="max-height:60vh;min-width:98vw;" > -->

<?php
require 'includes/secondfooter.php';
require 'includes/footer.php'; ?>
<script>
    var submitButton = document.getElementById("submit_form");
    var form = document.getElementById("email_form");
    form.addEventListener("submit", function(e) {
        setTimeout(function() {
            submitButton.value = "Sending...";
            submitButton.disabled = true;
        }, 1);
    });

    document.addEventListener("DOMContentLoaded", function() {
    var index = 0;
    var slides = document.querySelectorAll("#productos ul li");
    var totalSlides = slides.length;

    document.getElementById("siguiente").addEventListener("click", function() {
        index = (index + 1) % totalSlides;
        actualizarCarrusel();
    });

    document.getElementById("anterior").addEventListener("click", function() {
        index = (index - 1 + totalSlides) % totalSlides;
        actualizarCarrusel();
    });

    function actualizarCarrusel() {
        for (var i = 0; i < totalSlides; i++) {
            slides[i].style.display = "none";
        }
        slides[index].style.display = "block";
    }
});


</script>