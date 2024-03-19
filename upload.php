<?php
if (isset($_FILES['cargar'])) {
    extract($_POST);
     $nombre = $_POST['nombre'];

    // Definir la carpeta de destino
    $carpeta_destino = 'documents/';

    // Obtener el nombre y la extensión del archivo
    $nombre_archivo = basename($_FILES['archivo']['name']);
    $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

    if ($extension == "xlsx" || $extension == "csv") {

        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino . $nombre_archivo)) {
            include "dp.php";
            $consulta = "INSERT INTO documents (name, direccion) VALUES ('$nombre', '$nombre_archivo')"; // Asegúrate de que la conexión a la base de datos esté configurada correctamente en "dp.php"
            $resultado = mysqli_query($connection, $consulta);
            if ($resultado) {
                echo "Se subió correctamente";
            } else {
                echo "Ocurrió un error al subir el archivo";
            }
        }
    } else {
        echo "No se admiten otros archivos";
    }
}
?>