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

<div class="container most">
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
                            <a href="product.php?id=<?= $id_best; ?>" class="btn-floating yellow halfway-fab waves-effect waves-light right"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col s6">
                                        <p class="white-text"><i class="left fa fa-rupee"></i> <?= $price_best; ?></p>
                                    </div>
                                    <div class="col s6">
                                        <p class="white-text"><i class="left fa fa-shopping-basket"></i> <?= $totalsold; ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
        <?php }
        } ?>


    </div>
</div>
<!-- <img src="src/img/banner.jpg" alt="" style="max-height:60vh;min-width:98vw;" > -->
    
<div class="container-fluid center-align categories">
    <a href="#category" class="button-rounded btn-large waves-effect waves-light">Categorias</a>
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
   <img src="src/img/<?= $icon_category; ?>.jpg" alt="" style="max-height:25vh;max-width:30vw;"></a>
                                <span class="card-title red-text" style="font-size:20px;font-weight:700"><?= $name_category; ?></span>
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
    </div>
</div>
<!-- <img src="src/img/banner3.jpg" alt="" style="max-height:60vh;min-width:98vw;" > -->

<div class="container-fluid about" id="about">
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
</div>

<div class="container contact" id="contact">
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
</div>

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
</script>