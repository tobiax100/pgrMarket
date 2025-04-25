<?php
session_start();
if (isset($_SESSION['user_name'])) {
    $userName = $_SESSION['user_name'];
    $welcomeMessage = "<h1 class='welcome-text'>Bienvenido, " . htmlspecialchars($userName) . "!</h1>";
    $logoutButton = '<a href="/webcompras/logout.php" class="logout-button">Cerrar sesión</a>';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="main.js"></script>
    <title>PGR market place</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <?php echo $welcomeMessage; ?>
        <?php echo $logoutButton; ?>
        
        <nav aria-label="Categorias de Productos">
            <ul>
                <li><a href="">Nuevos</a></li>
                <li><a href="">Mujeres</a></li>
                <li><a href="">Niños</a></li>
                <li><a href="">Deportes</a></li>
                <li><a href="">Colecciones</a></li>
                <li><a href="">Outlet</a></li>
            </ul>
        </nav>
    
        <div id="searchContainer">
            <input type="text" id="searchRopa" placeholder="Buscar indumentaria">
            <button id="buscarRopa">Buscar</button>
        </div>
    
        <div class="containerLogin">
            <a id="loginUser" href="/webCompras/login/register.php" target="_blank">Log</a>
            <i class='bx bxl-google'></i>
        </div>

        <div class="two columns u-pull-right">
            <ul>
                <li class="submenu">
                    <a href="carrito.php">
                        <img src="img/carro-de-la-compra.png" id="img-carrito" alt="Carrito de Compras">
                    </a>
                </li>
            </ul>
        </div>
    </header>

             
                <section class="coleccion" id="coleccion">
                    <h2>ENCONTRÁ POR CATEGORÍAS</h2>
                    <div class="buttons">
                        <a href="#" class="categoria-btn">Calzado</a>
                        <a href="#" class="categoria-btn">Ropa</a>
                        <a href="#" class="categoria-btn">Ver Todo</a>
                    </div>
                    <div class="banner">
                        <img src="img/641c7a86-f82e-428f-af43-e4fedd74d733___3701cb1a38b89633507ebf0f580f2917.webp" alt="Nueva colección" class="banner-img">
                        <div class="banner-text">
                            <h3>NUEVA COLECCIÓN</h3>
                            <p>Comodidad y estilo único</p>
                            <a href="#encuentrate" class="btn-ver-coleccion">Ver colección</a>
                        </div>
                    </div>
                </section>


                <section id="encuentrate">
                    <h2>Encuentra lo que buscas</h2>
                    <div class="card-container">
                        <div class="card">
                            <img src="img/messi-carrito.avif" alt="Messi">
                            <h3>Un país, una pasión</h3>
                            <p class="descripcion">La celeste y blanca nos une en cada partido</p>
                            <a href="#" class="comprar-btn">COMPRAR AHORA</a>
                        </div>
                        <div class="card">
                            <img src="img/colidioadidas.avif" alt="Camiseta River">
                            <h3>La nueva camiseta tercera de River Plate</h3>
                            <p class="descripcion">Con una inédita disposición de sus icónicos colores sale a la cancha el nuevo conjunto Millonario.</p>
                            <a href="#" class="comprar-btn">COMPRAR AHORA</a>
                        </div>
                        <div class="card">
                            <img src="img/riceadidas.avif" alt="Adidas Z.N.E.">
                            <h3>ADIDAS Z.N.E.</h3>
                            <p class="descripcion">Los lugares que nos conectan</p>
                            <a href="#" class="comprar-btn">COMPRAR AHORA</a>
                        </div>
                        <div class="card">
                            <img src="img/supernova.avif" alt="Supernova">
                            <h3>Supercómodas. Supernova.</h3>
                            <p class="descripcion">Fácil, nunca. Divertido, siempre.</p>
                            <a href="#" class="comprar-btn">COMPRAR AHORA</a>
                        </div>
                    </div>
                </section>
                        
                    </div>
                </section>

                <div id="products">
                  
                    <?php include 'mostrar_productos.php'; ?>
                </div>
                
                <div class="tu-equipo">
                    <h2 class="tu-equipoLg">Encontra tu equipo</h2>
                    <div class="logos">
                    <a href="https://www.adidas.com.ar/argentina-hombre" target="_blank"><img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/afa_picker_d_4bb4f2bd82.png"></a>

                    <a href="https://www.adidas.com.ar/river_plate-hombre" target="_blank"><img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/river_picker_d_6ff992d997.png"></a>
            
                    <a href="https://www.adidas.com.ar/boca_juniors-hombre" target="_blank"> <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/boca_picker_d_d79ba1ad5a.png"></a>
                   
                    <a href="https://www.adidas.com.ar/inter_miami" target="_blank"> <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/picker_miami_d_d5fcb2ee7f.png"></a>
                   
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/juventus_d_29d6017607.png">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/bayer_d_3b14548aff.png">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/realmadrid_d_25938de7d8.png">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/manchester_d_44765e0ca4.png">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_150,w_150/arsenal_d_34cda16867.png">
                    </div>
                </div>


                <div class="nike">
                    <?php  include 'categorias.php'; ?>
                </div>

                <div class="footer-basic">
                  <footer>
                        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#coleccion">Home</a></li>
                                <li class="list-inline-item"><a href="#">Servicios</a></li>
                                <li class="list-inline-item"><a href="#">sobre nosotros</a></li>
                                <li class="list-inline-item"><a href="#">Terminos y condiciones</a></li>
                                <li class="list-inline-item"><a href="#">Politica y privacidad</a></li>
                            </ul>
                            <p class="copyright">PGR Company © 2025</p>
                  </footer>  
                </div>
                
</body>
</html>