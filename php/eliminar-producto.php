<?php
session_start();
include("../php/conexion.php");
 
// SOLO ADMIN
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'admin') {
    header("Location: ../index.php");
    exit();
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
 
    // Obtener imagen
    $sqlImagen = "SELECT imagen FROM productos WHERE id = ?";
    $stmtImagen = $conn->prepare($sqlImagen);
    $stmtImagen->bind_param("i", $id);
    $stmtImagen->execute();
 
    $resultado = $stmtImagen->get_result();
    $producto = $resultado->fetch_assoc();
 
    // Eliminar imagen de carpeta
    $rutaImagen = "../img/productos/" . $producto['imagen'];
 
    if (file_exists($rutaImagen)) {
        unlink($rutaImagen);
    }
    // Eliminar producto    
    $sql = "DELETE FROM productos WHERE id = ?";
    $stmt = $conn->prepare($sql);
 
    $stmt->bind_param("i", $id);
   
    if ($stmt->execute()) {
        header("Location: ../admin/ver-producto.php");
        exit();
    } else {
        echo "Error al eliminar";
    }
}
?>