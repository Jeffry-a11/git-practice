<?php
session_start();
//SOLO ADMIN
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'admin') {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css " rel="stylesheet">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin - Don Toño</a>
   
            <div class="ms-auto">
                <a class="btn btn-danger" href="../php/logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
                </a>
            </div>
        </div>
    </nav>
 
    <!-- CONTENIDO -->
    <div class="container mt-5">
   
        <h2 class="mb-4">Panel de Administración</h2>
   
        <div class="row">
   
            <!-- VER PRODUCTOS -->
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <i class="fa-solid fa-box fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Ver Productos</h5>
                        <a href="ver-productos.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
 
 
            <!-- AGREGAR PRODUCTO -->
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <i class="fa-solid fa-plus fa-3x mb-3 text-success"></i>
                        <h5 class="card-title">Agregar Producto</h5>
                        <a href="crear-producto.php" class="btn btn-success">Crear</a>
                    </div>
                </div>
            </div>
   
        </div>
   
    </div>
 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.mi n.js"></script>
 
</body>
</html  