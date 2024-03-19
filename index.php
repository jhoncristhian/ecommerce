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
    color: #000;
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
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
                        <button type="submit" name="search"
                            class="red waves-light miaw waves-effect btn hide">Search</button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>



<!------------------------------------------------------nuevo------------------------------------------------------------------>
<section data-v-2e47cf9d="" class="padding" style="background: radial-gradient(at right top);">
    <!---->
    <!---->
    <div data-v-2e47cf9d="" class="content-container">
        <!---->
        <div class="caja" data-v-2e47cf9d="">
            <div class="column1">
                <div class="inner-column1">
                    <h1 class="text-headline-1-dark">
                        Aprovecha el poder de los datos para potenciar el impacto de cada persona y contribuir a su
                        multiplicación.
                    </h1>
                    <p class="text-body-lg-dark">
                        Avanza desde simples gráficos y diagramas hacia experiencias con datos que desencadenen
                        revelaciones e impulsan acciones en momentos significativos.
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
                                Ver Demo
                            </span>
                            <!---->
                        </span>
                    </a>
                </div>
            </div>
            <div class="column2">
                <div class="inner-column2">
                    <div data-v-ac5a062a="" class="img">
                        <img data-v-ac5a062a=""
                            src="https://marvel-b1-cdn.bc0a.com/f00000000283357/web-assets.domo.com/miyagi/images/product/product-feature-mulitply-your-impact-data-experiences-customers-2x.png"
                            alt="product feature mulitply your impact data experiences customers 2x" be_marvel="1"
                            onerror="this.onerror=null;this.src='https://web-assets.domo.com/miyagi/images/product/product-feature-mulitply-your-impact-data-experiences-customers-2x.png'"
                            data-intellimize-exp-417216070="true">
                        <!---->
                    </div>
                </div>
            </div>
        </div>
        <div data-v-2e47cf9d="" class="PlatformCards">
            <a data-v-2e47cf9d="" href="#" class="PlatformCard">
                <div data-v-2e47cf9d="" class="text-headline-6-dark">
                    Aplicaciones empresariales
                </div>
                <p data-v-2e47cf9d="" class="text-body-md-dark ">
                    Mejora y agiliza tus decisiones utilizando aplicaciones de bajo código y de código profesional para
                    automatizar los análisis empresariales
                </p>
                <span data-v-2e47cf9d="" class="FauxButton" style="margin-top: 8px;">
                    Descubre Aplicaciones
                </span>
            </a>
            <a data-v-2e47cf9d="" href="#" class="PlatformCard">
                <div data-v-2e47cf9d="" class="text-headline-6-dark">
                    Inteligencia empresarial y análisis
                </div>
                <p data-v-2e47cf9d="" class="text-body-md-dark ">
                    Utiliza paneles intuitivos, informes y insights generados por inteligencia artificial para entender
                    lo que está sucediendo en tu negocio y tomar la siguiente decisión correcta
                </p>
                <span data-v-2e47cf9d="" class="FauxButton" style="margin-top: 8px;">
                    Visualiza BI y Análisis
                </span>
            </a>
            <a data-v-2e47cf9d="" href="#" class="PlatformCard">
                <div data-v-2e47cf9d="" class="text-headline-6-dark">
                    Base de datos
                </div>
                <p data-v-2e47cf9d="" class="text-body-md-dark ">
                    Construye experiencias de datos sobre una base segura y flexible que pueda integrar datos en tiempo
                    real desde cualquier lugar.
                </p>
                <span data-v-2e47cf9d="" class="FauxButton" style="margin-top: 8px;">
                    Explora la Fundación
                </span>
            </a>
        </div>
    </div>
</section>

<br>
<br>
<br>







<!-- aqui aumente -->
<section id='products' class="container most">
    <div class="row">
        <?php
        include 'db.php';

        // selecting product available in largest quantity
        $queryfirst = "SELECT
    product.id as 'id',
    product.name as 'name',
    product.price as 'price',
    product.thumbnail as 'thumbnail',
    
    SUM(command.quantity) as 'total',
    command.statut,
    command.id_product
    
    FROM product, command
    WHERE product.id = command.id_product AND command.statut = 'paid'
    GROUP BY product.id
    ORDER BY SUM(command.quantity) DESC LIMIT 6";
        $resultfirst = $connection->query($queryfirst);
        if ($resultfirst->num_rows > 0) {
            // output data of each row
            while ($rowfirst = $resultfirst->fetch_assoc()) {

                $id_best = $rowfirst['id'];
                $name_best = $rowfirst['name'];
                $price_best = $rowfirst['price'];
                $thumbnail_best = $rowfirst['thumbnail'];
                $totalsold = $rowfirst['total'];

        ?>

        <div class="col s12 m4">
            <div class="card hoverable animated slideInUp wow">
                <div class="card-image">
                    <a href="product.php?id=<?= $id_best;  ?>">
                        <img src="src/img/products/<?= $thumbnail_best; ?>" style="max-height:35vh;"></a>
                    <span class="card-title red-text" style="font-size:25px;font-weight:700"><?= $name_best; ?></span>
                    <a href="product.php?id=<?= $id_best; ?>"
                        class="btn-floating yellow halfway-fab waves-effect waves-light right"><i
                            class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <div class="container">
                        <div class="row">
                            <div class="col s6">
                                <p class="white-text">S/.
                                    <?= $price_best; ?></p>
                            </div>
                            <div class="col s6">
                                <p class="white-text"><i class="left fas fa-exclamation-circle"></i>
                                    <?= $totalsold; ?></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <?php }
        } ?>


    </div>
</section>

<div class="container-fluid center-align categories">
    <!-- <a href="#category" class="button-rounded btn-large waves-effect waves-light">Categorias</a> -->
    <div class="container" id="category">
        <div class="row">
            <?php

            //get categories
            $querycategory = "SELECT id, name, icon  FROM category";
            $total = $connection->query($querycategory);
            if ($total->num_rows > 0) {
                // output data of each row
                while ($rowcategory = $total->fetch_assoc()) {
                    $id_category = $rowcategory['id'];
                    $name_category = $rowcategory['name'];
                    $icon_category = $rowcategory['icon'];

            ?>

            <div class="col s12 m4">
                <div class="card hoverable animated slideInUp wow">
                    <div class="card-image">
                        <a href="category.php?id=<?= $id_category; ?>">
                            <img src="src/img/<?= $icon_category; ?>.jpg" alt=""
                                style="max-height:25vh;max-width:30vw;"></a>
                        <span class="card-title red-text"
                            style="font-size:20px;font-weight:700"><?= $name_category; ?></span>
                    </div>
                </div>
            </div>

            <?php }
            } ?>
        </div>
    </div>
</div>
<!-- hasta aqui -->




<div id='resources' class="container">
    <div data-v-2e47cf9d="" class="text-align-center pb-7">
        <h2 data-v-2e47cf9d="" class="text-headline-2-dark">
            Plataforma de experiencia de datos InfraVisionTech
        </h2>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" id="descripcion" class="btnNav btn-lg btn-block ">Descripción</button>
            </div>
            <div class="col">
                <button type="button" id="analytics" class=" btnNav">Bi y Análisis</button>
            </div>
            <div class="col">
                <button type="button" id="fundation" class=" btnNav">Fundación de Datos</button>
            </div>
        </div>
    </div>
    <div id="contenido" class="mt-3">
        <!-- Aquí se mostrará el contenido generado por los botones -->
    </div>
</div>

<section class="container-fluid about" id="about">
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <div class="card animated slideInUp wow">
                    <div class="card-image">
                        <img src="src/img/products/grafico.jpg" height="522" width="230" alt="">
                    </div>
                </div>
            </div>

            <div class="col s12 m8">
                <h3 class="animated slideInUp wow">Acerca de Nosotros</h3>
                <div class="divider animated slideInUp wow"></div>
                <p class="animated slideInUp wow">
                    Bienvenido a InfraVision, tu socio en la visualización de datos y análisis estadístico. Nos
                    comprometemos a proporcionar soluciones de vanguardia para empresas de todos los tamaños.
                    Con
                    amplia experiencia en análisis de datos y diseño de dashboards, transformamos tus datos en
                    información clara y accionable. Valoramos la innovación, la precisión y la usabilidad, y nos
                    esforzamos por ofrecer soluciones intuitivas y personalizadas. Nuestra misión es ayudar a
                    las
                    empresas a alcanzar su máximo potencial a través del poder de los datos. ¡Únete a nosotros
                    en
                    InfraVision y descubre el poder de la visualización de datos!
            </div>

        </div>
    </div>
</section>

<section class="container contact" id="contact">
    <div class="row">
        <form action="https://postmail.invotes.com/send" method="post" id="email_form"
            class="col s12 animated slideInUp wow">
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
                    <textarea id="icon_prefix2" class="materialize-textarea" type="text" name="text" rows="4"" style="
                        resize: vertical;min-height: 8rem;" required></textarea>
                    <label for="icon_prefix2">Tu mensaje</label>
                </div>

                <input type="hidden" name="access_token" value="" />
                <input type="hidden" name="success_url" value="." />
                <input type="hidden" name="error_url" value=".?err=1" />
                <div class="center-align">
                    <button id="submit_form" type="submit" name="contact" value="Send"
                        class="button-rounded btn-large waves-effect waves-light">Enviar</button>
                </div>
                <p>Powered by InfraVision</p>
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

const contenidoDiv = document.getElementById('contenido');
const descripcionBtn = document.getElementById('descripcion');
const analyticsBtn = document.getElementById('analytics');
const fundationBtn = document.getElementById('fundation');

const namesbutonDes = ['Paneles interactivos'];
const urlsDes = ['#'];

const namesbutonAnalytics = ['Visualizaciones avanzadas', 'Alertas', 'Narración de datos',
    'Interactividad con el panel'
];
const urlsAnalytics = ['#', '#', '#', '#'];

const namesbutonFundation = ['Integración de datos desde cualquier fuente', 'Dato de governancia',
    'Integración del almacén de datos en la nube', 'Seguridad'
];
const urlsFundation = ['#', '#', '#', '#'];

window.addEventListener('load', function() {
    init();
});

descripcionBtn.addEventListener('click', function() {

    cambiarContenido(
        'Plataforma de experiencia de datos InfraVisionTech',
        'Ponga los datos a trabajar para todos con experiencias impulsadas por gráficos, análisis intuitivos y una base segura que conecta sus sistemas de datos.',
        'SALIDAS DE LA PLATAFORMA',
        namesbutonDes,
        urlsDes,
        'src/img/capa1.png',
        '#2ab7a9'
    );
});

analyticsBtn.addEventListener('click', function() {
    cambiarContenido(
        'BI y Análisis',
        'Nuestras vistas intuitivas de datos personalizados y capacidades de generación de informes permiten una toma de decisiones mejor y más rápida para todo tipo de usuarios.',
        'CAPACIDADES',
        namesbutonAnalytics,
        urlsAnalytics,
        'src/img/capa2.png',
        '#ffffff'
    );

});

fundationBtn.addEventListener('click', function() {
    cambiarContenido(
        'Fundación de datos',
        'Nuestra base de datos segura proporciona la infraestructura, la integración de datos y la gobernanza que respaldan sus experiencias con los datos.',
        'CAPACIDADES',
        namesbutonFundation,
        urlsFundation,
        'src/img/capa3.png',
        '#ffffff'
    );

});

function init() {
    cambiarContenido(
        'Plataforma de experiencia de datos InfraVisionTech',
        'Ponga los datos a trabajar para todos con experiencias impulsadas por gráficos, análisis intuitivos y una base segura que conecta sus sistemas de datos.',
        'SALIDAS DE LA PLATAFORMA',
        namesbutonDes,
        urlsDes,
        'src/img/capa1.png',
        '#2ab7a9'
    );
}

function generateButtons(names, urls) {
    let buttonsHTML = '';
    for (let i = 0; i < names.length; i++) {
        buttonsHTML += `<a href="${urls[i]}" class="btn btn-primary">
            ${names[i]}</a>`;
    }
    return buttonsHTML;
}

function cambiarContenido(title, contenido, subtitle, namesbuton, urls, imagen, color) {
    contenidoDiv.innerHTML = `
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="${imagen}" alt="Imagen" class="img-fluid">
            </div>
            <!-- Columna del texto y botones -->
            <div class="col-md-8">
                <h2>${title}</h2>
                <p>${contenido}</p>
                <p>${subtitle}</p>
                ${generateButtons(namesbuton, urls)} <!-- Llama a la función para generar botones -->
            </div>
        </div>
    </div>
    `;
    descripcionBtn.style.backgroundColor = color;
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>