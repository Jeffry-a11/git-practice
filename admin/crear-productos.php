<?php
session_start();
 
// SOLO ADMIN
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'admin') {
    header("Location: ../index.php");
    exit();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Crear Producto</span>
           
            <a href="dashboard.php" class="btn btn-secondary">
                Volver
            </a>
        </div>
    </nav>
    <div class="container mt-5">
 
        <div class="card shadow p-4">
   
            <h2 class="mb-4">Nuevo Producto</h2>
 
            <!-- IMPORTANTE -->
            <form method="POST" action="../php/crear-producto.php" enctype="multipart/form-data">
   
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text"
                        name="nombre"
                        class="form-control"
                        required>
                </div>    
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="descripcion"
                              class="form-control"
                              rows="3"
                              required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number"
                           step="0.01"
                           name="precio"
                           class="form-control"
                           required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Categoría</label>
                    <input type="text"
                           name="categoria"
                           class="form-control"
                           required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number"
                           name="stock"
                           class="form-control"
                           required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagen</label>
 
                    <input type="file"
                           name="imagen"
                           class="form-control"
                           required>
                </div>
                <button type="submit" class="btn btn-success">
                    Crear Producto
                </button>
            </form>
        </div>
    </div>
   
</body>
</html>  