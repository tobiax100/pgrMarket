
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
                    <a href="/webCompras/components/carrito.php">
                     <img src="img/carro-de-la-compra.png" id="img-carrito" alt="Carrito de Compras">
                     <span id="contador-carrito" class="contador">0</span>
                     </a>
                </li>
            </ul>
        </div>
