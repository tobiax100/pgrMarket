<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="img/icons8-copyright-de-grabación-de-sonido-50.png" type="image/x-icon">
    <script src="main.js"></script>
    <title>PGR market place</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
    <ul>
        <!-- <li><img src="img/icons8-copyright-de-grabación-de-sonido-50.png"><a href="youtube.com"></a></li> -->
        <li><a href="">Nuevos</a></li>
        <li><a href="">Mujeres</a></li>
        <li><a href="">Niños</a></li>
        <li><a href="">Deportes</a></li>
        <li><a href="">Colecciones</a></li>
        <li><a href="">Outlet</a></li>
    </ul>
    

    <form id="buscadorRopa">
        <label for="buscadorInput"></label>
        <input type="text" id="buscadorInput" name="buscadorInput">
        <button type="submit" id="btn-buscar"><i class="fas fa-search"></i> Buscar
        </button>
    </form>

    //borren este carrito, no lo hago yo porque soy re piola
    <div class="two columns u-pull-right">
        <ul>
            <li class="submenu">
                    <img src="img/carro-de-la-compra.png" id="img-carrito">
                    <div id="carrito">
                            
                            <table id="lista-carrito" class="u-full-width">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>

                            <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                    </div>
                </header>

                //cards creadas al re pedo pq no habia conectado la base de datos
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

                <section class="productos">
                    <div class="producto">
                        <img src="img/1283521-1000-1000.webp" alt="Nike Swoosh">
                        <h3>Nike Swoosh</h3>
                        <p class="descripcion">Campera de Moda para Hombre</p>
                        <p class="precio">$259.999</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                    <div class="producto">
                        <img src="img/135d92f1-2182-4625-a36f-93ba2e88cc0e___e4f45870707b3b6d094cf3236a31d9eb.webp" alt="Nike Sportswear Phoenix Fleece">
                        <h3>Nike Sportswear Phoenix Fleece</h3>
                        <p class="descripcion">Pantalón de Moda para Mujer</p>
                        <p class="precio">$119.999</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                    <div class="producto">
                        <img src="img/817932-1000-1000.webp" alt="Nike Tech Reimagined">
                        <h3>Nike Tech Reimagined</h3>
                        <p class="descripcion">Buzo Con Capucha de Moda para Hombre</p>
                        <p class="precio">$219.999</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                    <div class="producto">
                        <img src="img/a7029e45-fea7-4f72-aa6b-547e012b997e___4260a001faf97609d94c13684f34208a.webp" alt="Nike Tech">
                        <h3>Nike Tech</h3>
                        <p class="descripcion">Pantalón de Moda para Hombre</p>
                        <p class="precio">$219.999</p>
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                    <div class="producto">
                        <img src="img/1237004-1000-1000.webp" alt="Nike Wool Classics">
                        <h3>Nike Wool Classics</h3>
                        <p class="descripcion">Pantalón de Moda para Hombre</p>
                        <p class="precio">$199.999</p>
                        <a href="#" class="btn-comprar">Comprar</a>
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
                    //aca se ponen los productos de la base de datos
                    <?php include 'mostrar_productos.php'; ?>
                </div>
                //NO LE DEN BOLA A ESTO QUE ERA PARA DECORACION MAS QUE NADA, DESPUES LO VEO BIEN
                <div class="tu-equipo">
                    <h2 class="coleccion">Encontra tu equipo</h2>
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

</body>
</html>