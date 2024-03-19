<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    $nav ='includes/nav.php';
} else {
    $nav ='includes/navconnected.php';
    $idsess = $_SESSION['id'];
    // echo "ID:".$idsess;
}

require 'includes/header.php';
require $nav; ?>


<div class="container scroll">
    <div></div>
    <?php
     include 'db.php';
// Realizar una consulta para verificar si existen datos en la tabla "dashboard" para este usuario
$query = "SELECT * FROM dashboard WHERE user_id = $idsess";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $url = $row['url'];
        $date = $row['date'];
        $comment = $row['comment'];
        ?>
    <div>
        <h4 class="text-primary"><?= $name; ?></h4>
        <p class="text-secondary"><?= $date; ?></p>
        <p class="text-info"><?= $comment; ?></p>
        <iframe title="informacion" width="1140" height="573.5" src="<?= $url ?>" .$url frameborder="0"
            allowFullScreen="true"></iframe>
    </div>
    <?php }}  else {
// No hay datos en la tabla "dashboard" para este usuario
echo "No hay dashboards disponibles para este usuario.";
}
    // Cerrar la conexión a la base de datos
$connection->close();
    ?>

    <?php require 'includes/footer.php'; ?>