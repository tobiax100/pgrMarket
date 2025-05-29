<?php
session_start();
if (isset($_SESSION['user_name'])) {
    $userName = $_SESSION['user_name'];
    $welcomeMessage = "<h1 class='welcome-text'>Bienvenido, " . htmlspecialchars($userName) . "!</h1>";
    $logoutButton = '<a href="/webcompras/login/logout.php" class="logout-button">Cerrar sesión</a>';
} else {
    $welcomeMessage = "<h1 class='welcome-text'>Bienvenido!</h1>";
    $logoutButton = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icons8-copyright-de-grabación-de-sonido-50.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    
    <title>PGR market place</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <?php  include './components/header.php' ?>
    </header>

    <?php include './components/coleccion.php' ?>


    <div class="productosDb">
        <h3>Todos Los Productos</h3>
        <?php include './databaseProducts/mostrar_productos.php'; ?>
    </div>


    <div class="productosDb">
        <h3>Nike</h3>
        <?php  include './databaseProducts/categorias.php'; ?>
    </div>

    <div class="productosDb">
        <h3>Adidas</h3>
        <?php include './databaseProducts/adidas.php' ?>
    </div>

    <div class="productosDb">
        <?php include './components/sectionTeam.php' ?>
    </div>



    <footer>
        <?php include './components/footer.php'  ?>
    </footer>

<script src="main.js"></script>         
<script src="carrito.js"></script>         
</body>
</html>