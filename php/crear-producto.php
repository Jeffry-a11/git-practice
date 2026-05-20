<?php
session_start();
include("conexion.php");
// SOLO ADMIN
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'admin') {
    header("Location: ../index.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    $imagen = $_FILES['imagen']['name'];
 
    // Ruta temporal
    $ruta_temporal = $_FILES['imagen']['tmp_name'];
   
    // Carpeta destino
    $carpeta_destino = "../img/productos/";
   
    // Mover imagen
    move_uploaded_file($ruta_temporal, $carpeta_destino . $imagen);
   
    // INSERT
    $sql = "INSERT INTO productos
    (nombre, descripcion, precio, categoria, stock, imagen)
    VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdsis",
        $nombre,
        $descripcion,
        $precio,
        $categoria,
        $stock,
        $imagen
    );
    if ($stmt->execute()) {
        header("Location: ../admin/ver-producto.php");
        exit();
    } else {
        echo "Error al crear producto";
    }
}
?>