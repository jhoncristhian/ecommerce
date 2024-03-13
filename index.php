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
/*-----------------------------------nuevo stiloo---------------------------------------------------------- */
:root{
    --color-brand: #007bff;
    --color-white: #FFFFFF;
    --color-black: #000000;
    --color-primary-100: #FBFCFF;
    --color-primary-200: #E7F2FE;
    --color-primary-300: #CBE6FC;
    --color-primary-400: var(--color-brand);
    --color-primary-500: #6AB4E6;
    --color-primary-600: #276296;
    --color-primary-700: #1C4A72;
    --color-primary-800: #113350;
    --color-primary-900: #061C30;
    --color-secondary-100: #FFFBFF;
    --color-secondary-200: #FFF3E1;
    --color-secondary-300: #FFE0B5;
    --color-secondary-400: #FFB656;
    --color-secondary-500: #FF9922;
    --color-secondary-600: #84511A;
    --color-secondary-700: #643D11;
    --color-secondary-800: #462A09;
    --color-secondary-900: #2A1703;
    --color-tertiary-100: #FBFCFF;
    --color-tertiary-200: #E7F3FE;
    --color-tertiary-300: #D6E4F2;
    --color-tertiary-400: #BAC8D6;
    --color-tertiary-500: #9FADBB;
    --color-tertiary-600: #53606C;
    --color-tertiary-700: #3B4854;
    --color-tertiary-800: #25333D;
    --color-tertiary-900: #0F1D27;
    --color-neutral-100: #FAFAFA;
    --color-neutral-200: #F6F6F6;
    --color-neutral-300: #EEEEEE;
    --color-neutral-400: #D4D4D4;
    --color-neutral-500: #888888;
    --color-neutral-600: #555555;
    --color-neutral-700: #333333;
    --color-neutral-800: #222222;
    --color-neutral-900: #111111;
    --color-success-400: #C6EF9D;
    --color-success-500: #559E38;
    --color-success-600: #0E3900;
    --color-error-400: #FFDAD5;
    --color-error-500: #C22C24;
    --color-error-600: #690003;
    --shade-black-5: rgba(0, 0, 0, 0.05);
    --shade-black-10: rgba(0, 0, 0, 0.1);
    --shade-black-15: rgba(0, 0, 0, 0.15);
    --shade-black-20: rgba(0, 0, 0, 0.2);
    --shade-black-30: rgba(0, 0, 0, 0.3);
    --shade-black-60: rgba(0, 0, 0, 0.6);
    --shade-black-70: rgba(0, 0, 0, 0.7);
    --shade-black-80: rgba(0, 0, 0, 0.8);
    --shade-black-90: rgba(0, 0, 0, 0.9);
    --shade-black-100: var(--color-black);
    --shade-white-5: rgba(255, 255, 255, 0.05);
    --shade-white-10: rgba(255, 255, 255, 0.1);
    --shade-white-15: rgba(255, 255, 255, 0.15);
    --shade-white-20: rgba(255, 255, 255, 0.2);
    --shade-white-60: rgba(255, 255, 255, 0.6);
    --shade-white-70: rgba(255, 255, 255, 0.7);
    --shade-white-80: rgba(255, 255, 255, 0.8);
    --shade-white-90: rgba(255, 255, 255, 0.9);
    --shade-white-100: var(--color-white);
    --shade-brand-5: rgba(153, 204, 238, 0.05);
    --shade-brand-10: rgba(153, 204, 238, 0.1);
    --shade-brand-15: rgba(153, 204, 238, 0.15);
    --shade-brand-20: rgba(153, 204, 238, 0.2);
    --shade-brand-25: rgba(153, 204, 238, 0.25);
    --shade-brand-30: rgba(153, 204, 238, 0.3);
    --shade-brand-40: rgba(153, 204, 238, 0.4);
    --shade-brand-50: rgba(153, 204, 238, 0.5);
    --shade-brand-60: rgba(153, 204, 238, 0.6);
    --font-size-10: 10px;
    --font-size-12: 12px;
    --font-size-14: 14px;
    --font-size-16: 16px;
    --font-size-18: 18px;
    --font-size-20: 20px;
    --font-size-24: 24px;
    --font-size-28: 28px;
    --font-size-32: 32px;
    --font-size-36: 36px;
    --font-size-46: 46px;
    --font-size-60: 60px;
    --font-weight-light: 300;
    --font-weight-regular: 400;
    --font-weight-semibold: 600;
    --font-weight-bold: 700;
    --line-height-sm: 1;
    --line-height-md: 1.2;
    --line-height-lg: 1.5;
    --letter-spacing-xxs: -1px;
    --letter-spacing-xs: -0.5px;
    --letter-spacing-sm: -0.25px;
    --letter-spacing-md: 0px;
    --letter-spacing-lg: 0.15px;
    --letter-spacing-xl: 0.25px;
    --letter-spacing-xxl: 0.4px;
    --letter-spacing-xxxl: 1.25px;
    --space-1: 8px;
    --space-half: calc(var(--space-1) / 2);
    --space-1-half: calc(var(--space-1) + var(--space-half));
    --space-2: calc(var(--space-1) * 2);
    --space-3: calc(var(--space-1) * 3);
    --space-4: calc(var(--space-1) * 4);
    --space-5: calc(var(--space-1) * 5);
    --space-6: calc(var(--space-1) * 6);
    --space-7: calc(var(--space-1) * 7);
    --space-8: calc(var(--space-1) * 8);
    --space-9: calc(var(--space-1) * 9);
    --space-10: calc(var(--space-1) * 10);
    --size-1: 8px;
    --size-half: calc(var(--size-1) / 2);
    --size-1-half: calc(var(--size-1) + var(--size-half));
    --size-2: calc(var(--size-1) * 2);
    --size-3: calc(var(--size-1) * 3);
    --size-4: calc(var(--size-1) * 4);
    --size-5: calc(var(--size-1) * 5);
    --size-6: calc(var(--size-1) * 6);
    --size-7: calc(var(--size-1) * 7);
    --size-8: calc(var(--size-1) * 8);
    --size-9: calc(var(--size-1) * 9);
    --size-10: calc(var(--size-1) * 10);
    --container-sm: 320px;
    --border-radius-sm: var(--space-half);
    --border-radius-md: var(--space-1);
}
.padding {
    padding: 20px; /* Ajusta el padding según sea necesario */
}

.content-container {
    max-width: 1200px; /* Ancho máximo del contenedor de contenido */
    margin: 0 auto; /* Centra el contenedor horizontalmente */
}

.row {
    display: flex; /* Usa flexbox para alinear los elementos */
    flex-wrap: wrap; /* Permite que los elementos se ajusten a múltiples filas si es necesario */
    justify-content: center; /* Centra los elementos horizontalmente */
}

.column {
    flex: 0 0 auto; /* Establece el tamaño de la columna como auto */
    width: 100%; /* Ancho completo */
    max-width: 200px; /* Ancho máximo de la columna */
}

.inner-column {
    text-align: center; /* Alinea el contenido al centro */
}

.inner-column img {
    max-width: 100%; /* Establece el ancho máximo de la imagen al 100% del contenedor */
    height: auto; /* Permite que la altura de la imagen se ajuste automáticamente */
}

.column h1 {
    font-size: 24px; /* Tamaño de fuente del título */
    margin-bottom: 10px; /* Espacio inferior del título */
}

.column p {
    font-size: 16px; /* Tamaño de fuente del párrafo */
    margin-bottom: 20px; /* Espacio inferior del párrafo */
}

.PlatformCards {
    display: flex; /* Usa flexbox para alinear los elementos */
    justify-content: space-around; /* Distribuye los elementos uniformemente */
    margin-top: 20px; /* Espacio superior entre los elementos */
}

.PlatformCard {
    flex: 0 0 auto; /* Establece el tamaño de la tarjeta como auto */
    width: calc(33.33% - 20px); /* Ancho de la tarjeta */
    max-width: 300px; /* Ancho máximo de la tarjeta */
    background-color: #fff; /* Color de fondo de la tarjeta */
    border-radius: 8px; /* Radio de borde de la tarjeta */
    padding: 20px; /* Ajuste de relleno de la tarjeta */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra de la tarjeta */
    transition: box-shadow 0.3s ease; /* Transición suave de la sombra */
}

.PlatformCard:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Sombra aumentada al pasar el ratón */
}

.PlatformCard .text-headline-6-dark {
    font-size: 20px; /* Tamaño de fuente del título */
    margin-bottom: 10px; /* Espacio inferior del título */
}

.PlatformCard .text-body-md-dark {
    font-size: 14px; /* Tamaño de fuente del texto del cuerpo */
    margin-bottom: 20px; /* Espacio inferior del texto del cuerpo */
}

.FauxButton {
    display: inline-block; /* Hace que el elemento sea en línea y que respete los márgenes */
    padding: 8px 16px; /* Ajuste de relleno del botón */
    background-color: #007bff; /* Color de fondo del botón */
    color: #fff; /* Color del texto del botón */
    border-radius: 4px; /* Radio de borde del botón */
    transition: background-color 0.3s ease; /* Transición suave del color de fondo */
    text-decoration: none; /* Quita la decoración del texto */
}

.FauxButton:hover {
    background-color: #0056b3; /* Color de fondo del botón aumentado al pasar el ratón */
}

.content-container{


    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    color: #555;
    box-sizing: border-box;
    padding: 0;
    position: relative;
    margin: auto;
    height: 100%;
    min-height: inherit;
    max-width: 980px;
}

.caja{

 
    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    color: #555;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    position: relative;
    width: 100%;
    max-width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-bottom: -40px;
}

.caja .column1{

    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    color: #555;
    box-sizing: border-box;
    margin: 0 !important;
    padding: 0 !important;
    border: none !important;
    position: relative;
    height: 100%;
    align-self: center;
    flex: none !important;
    width: 50%;
}
.caja .column1 .inner-column1 {

    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    color: #555;
    box-sizing: border-box;
    padding: 0;
    position: relative;
    height: 100%;
    margin: 0 20px 40px 20px;
}

.caja .column1 .inner-column1 .text-headline-1-dark{

    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: inherit;
    font-size: 40px;
    font-weight: var(--font-weight-light);
    letter-spacing: var(--letter-spacing-xs);
    line-height: var(--line-height-md);
    color: var(--color-neutral-900);
}

.caja .column1 .inner-column1 .text-body-lg-dark {

    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: inherit;
    margin-top: 20px;
    font-size: var(--font-size-16);
    font-weight: var(--font-weight-regular);
    letter-spacing: var(--letter-spacing-lg);
    line-height: var(--line-height-lg);
    color: var(--color-neutral-600);
}

a.themePrimary {
    /* Estilos generales */
    
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    color: #fff; /* Color del texto */
    background-color: #deba45; /* Color de fondo */
    transition: background-color 0.3s ease; /* Transición suave del color de fondo */
}

a.themePrimary:hover {
    background-color: #b0912e; /* Cambio de color al pasar el ratón */
}


.caja .column2{

    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    color: #555;
    box-sizing: border-box;
    margin: 0 !important;
    padding: 0 !important;
    border: none !important;
    position: relative;
    height: 100%;
    align-self: center;
    flex: none !important;
    width: 50%;
}

.caja .column2 .img{

    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    color: #555;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    position: relative;
}

.PlatformCards{

    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    color: #555;
    box-sizing: border-box;
    margin: 0;
    padding: var(--space-1-half);
    display: flex;
}

.PlatformCards .PlatformCard{

    box-sizing: border-box;
    touch-action: manipulation;
    text-decoration: none;
    color: inherit;
    font-family: inherit;
    cursor: pointer;
    background-color: var(--shade-white-100);
    border-bottom: 4px solid var(--color-brand);
    border-top-left-radius: var(--border-radius-md);
    border-top-right-radius: var(--border-radius-md);
    box-shadow: 0px 4px 24px rgba(153, 204, 238, 0.24);
    display: block;
    margin: var(--space-3) var(--space-1-half) 0;
    padding: var(--space-2);
    text-align: center;
    transition: transform 0.2s ease 0s;
    flex: 1 1 100%;
}

.PlatformCards .PlatformCard .text-headline-6-dark{

    --border-radius-md: var(--space-1);
    font-family: inherit;
    cursor: pointer;
    text-align: center;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-size: var(--font-size-20);
    font-weight: var(--font-weight-semibold);
    letter-spacing: var(--letter-spacing-md);
    line-height: var(--line-height-md);
    color: var(--color-neutral-900);
}

.PlatformCards .PlatformCard .text-body-md-dark {
    cursor: pointer;
    text-align: center;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: inherit;
    font-size: var(--font-size-14);
    font-weight: var(--font-weight-regular);
    letter-spacing: var(--letter-spacing-xl);
    line-height: var(--line-height-lg);
    color: var(--color-neutral-600);
    margin-top: var(--space-1);
}

.PlatformCards .PlatformCard .FauxButton{
    line-height: 1.5;
    tab-size: 4;
    word-break: break-word;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;

    font-family: inherit;
    cursor: pointer;
    text-align: center;
    box-sizing: border-box;
    margin: 0;
    align-items: center;
    border-radius: var(--border-radius-sm);
    color: var(--color-primary-600);
    display: inline-flex;
    font-size: var(--font-size-14);
    font-weight: var(--font-weight-semibold);
    height: var(--size-4);
    letter-spacing: var(--letter-spacing-xxl);
    padding: 0 var(--space-1);
    white-space: nowrap;
    background-color: var(--shade-brand-20);
    margin-top: 8px;
}
/*.padding{
    cursor: default;
    line-height: 1.5;
    tab-size: 4;
    word-break: break-word;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;

    font-family: "Open Sans", Helvetica, Arial, sans-serif;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    color: #555;
    width: 100%;
    min-height: 1px;
    position: relative;
    overflow: hidden;
    padding-top: 80px;
    padding-bottom: 80px;
    background: radial-gradient(at right top);
}
*/
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

<!------------------------------------------------------nuevo------------------------------------------------------------------>
<section data-v-2e47cf9d="" class="padding" style="background: radial-gradient(at right top);">
<!----> <!----> 
    <div data-v-2e47cf9d="" class="content-container">
        <!----> 
        <div class="caja" data-v-2e47cf9d="">
            <div class="column1">
                <div class="inner-column1">
                    <h1 class="text-headline-1-dark">
                    Aprovecha el poder de los datos para potenciar el impacto de cada persona y contribuir a su multiplicación.
                    </h1>
                    <p class="text-body-lg-dark">
                    Avanza desde simples gráficos y diagramas hacia experiencias con datos que desencadenen revelaciones e impulsan acciones en momentos significativos.
                    </p> 
                    <p>
                        <!---------->
                        <!---------->
                        <!---------->
                    </p>  
                    <a data-v-1d29ffd8="" href="/start/free" class="mr-1 ButtonBase sizeMd themePrimary">
                        <span data-v-1d29ffd8="" class="__content">
                            <!----> 
                            <span data-v-1d29ffd8="" class="__label">
                                Prueba Gratuita
                            </span> 
                            <!---->
                        </span>
                    </a> 
                </div>
            </div> 
            <div class="column2">
                <div class="inner-column2">
                    <div data-v-ac5a062a="" class="img">
                        <img data-v-ac5a062a="" src="https://marvel-b1-cdn.bc0a.com/f00000000283357/web-assets.domo.com/miyagi/images/product/product-feature-mulitply-your-impact-data-experiences-customers-2x.png" alt="product feature mulitply your impact data experiences customers 2x" be_marvel="1" onerror="this.onerror=null;this.src='https://web-assets.domo.com/miyagi/images/product/product-feature-mulitply-your-impact-data-experiences-customers-2x.png'" data-intellimize-exp-417216070="true"> 
                        <!---->
                    </div>
                </div>
            </div>
        </div> 
        <div data-v-2e47cf9d="" class="PlatformCards">
            <a data-v-2e47cf9d="" href="/intelligent-apps" class="PlatformCard">
                <div data-v-2e47cf9d="" class="text-headline-6-dark">
                Aplicaciones empresariales
                </div> 
                <p data-v-2e47cf9d="" class="text-body-md-dark ">
                Mejora y agiliza tus decisiones utilizando aplicaciones de bajo código y de código profesional para automatizar los análisis empresariales
                </p> 
                <span data-v-2e47cf9d="" class="FauxButton" style="margin-top: 8px;">
                Descubre Aplicaciones
                </span>
            </a> 
            <a data-v-2e47cf9d="" href="/business-intelligence" class="PlatformCard">
                <div data-v-2e47cf9d="" class="text-headline-6-dark">
                Inteligencia empresarial y análisis
                </div> 
                <p data-v-2e47cf9d="" class="text-body-md-dark ">
                Utiliza paneles intuitivos, informes y insights generados por inteligencia artificial para entender lo que está sucediendo en tu negocio y tomar la siguiente decisión correcta            
                </p> 
                <span data-v-2e47cf9d="" class="FauxButton" style="margin-top: 8px;">
                Visualiza BI y Análisis
                </span>
            </a> 
            <a data-v-2e47cf9d="" href="/data-integration" class="PlatformCard">
                <div data-v-2e47cf9d="" class="text-headline-6-dark">
                Base de datos
                </div> 
                <p data-v-2e47cf9d="" class="text-body-md-dark ">
                Construye experiencias de datos sobre una base segura y flexible que pueda integrar datos en tiempo real desde cualquier lugar.          
                </p> 
                <span data-v-2e47cf9d="" class="FauxButton" style="margin-top: 8px;">
                Explora la Fundación
                </span>
            </a>
        </div>
    </div>
</section>














<!--<section>
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
