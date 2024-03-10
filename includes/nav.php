<div class="navbar-fixed">
    <nav class="navblack">
        <div class="nav-wrapper nav-wrapper-2 container">
            <ul class="left hide-on-med-and-down">
                <li><a href="index.php" class="brand"></a></li>
                <li><a href="index.php" class="dark-text" style="font-size:25px;font-weight:900">InfraVision</a></li>

            </ul>

            <ul class="center hide-on-large-only">
                <li><a href="index.php" class="dark-text">InfraVision</a></li>

            </ul>

            <ul class="right hide-on-med-and-down">
            <li><a href="#productos" class="dark-text">Productos</a></li>
            <li><a href="#about" class="dark-text">Nosotros</a></li>
                <li><a href="#" class="dark-text">Recursos</a></li>
                <li><a href="#contact" class="dark-text">Contactanos</a></li>
                <li><a href="sign.php" class="waves-effect waves-light btn button-rounded">Iniciar sesión</a></li>
                <li><a href="cart.php" class="dark-text baskett"><i class="material-icons">shopping_cart</i>
                        <span class="badge <?php if(!isset($_SESSION['item']) OR $_SESSION['item'] == 0) echo'hide'; ?>"><?= $_SESSION['item']; ?></span></a></li>
            </ul>
        </div>
    </nav>
</div>
