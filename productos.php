<?php 
session_start(); 
include("php/conexion.php"); 

$sql = "SELECT * FROM productos"; 
$resultado = $conn->query($sql); 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de Don Toño</title>

    <link rel="stylesheet" href="styles/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php require_once("components/navbar.php"); ?>

<div class="container mt-5">

    <h2 class="mb-4">Nuestros Productos</h2>

    <div class="row">

        <?php while($producto = $resultado->fetch_assoc()): ?>

            <div class="col-md-4 mb-4">

                <div class="card h-100 shadow-sm">

                    <img 
                        src="img/productos/<?php echo $producto['imagen']; ?>" 
                        class="card-img-top"
                        style="height:220px; object-fit:cover;"
                        alt="<?php echo $producto['nombre']; ?>">

                    <div class="card-body">

                        <h5 class="card-title">
                            <?php echo $producto['nombre']; ?>
                        </h5>

                        <p class="card-text">
                            <?php echo $producto['descripcion']; ?>
                        </p>

                        <p class="fw-bold text-primary">
                            $<?php echo $producto['precio']; ?>
                        </p>

                        <a href="#" class="btn btn-primary">
                            Ver más
                        </a>

                    </div>

                </div>

            </div>

        <?php endwhile; ?>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>