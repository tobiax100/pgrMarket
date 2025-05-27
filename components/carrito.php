<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>

<style>


@keyframes fadeOut {
    from {opacity: 1;}
    to {opacity: 0;}
}

/* Estilos base */
body {
    background-color: #121212;
    color: #e0e0e0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

h1 {
    color: #ffffff;
    text-align: center;
    margin-bottom: 2rem;
    font-size: 2.5rem;
    border-bottom: 2px solid #444;
    padding-bottom: 1rem;
}

/* Items del carrito */
.item-carrito {
    display: flex;
    background-color: #1e1e1e;
    border-radius: 8px;
    margin-bottom: 1.5rem;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.item-carrito:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
}

.item-carrito img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 6px;
    margin-right: 1.5rem;
    border: 1px solid #444;
}

.item-carrito div {
    flex-grow: 1;
}

.item-carrito h3 {
    color: #ffffff;
    margin-top: 0;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
}

.item-carrito p {
    margin: 0.5rem 0;
    color: #b0b0b0;
}

/* Botones */
.eliminar-item {
    background-color: #ff4444;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 1rem;
    transition: background-color 0.3s;
}

.eliminar-item:hover {
    background-color: #cc0000;
}

/* Total y botones finales */
#total-carrito {
    font-size: 1.5rem;
    text-align: right;
    margin: 2rem 0;
    color: #ffffff;
    font-weight: bold;
}

.button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 2rem;
}

.button {
    padding: 0.8rem 2rem;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s;
    font-weight: bold;
}

.button, #volver-principal {
    display: inline-block;
    padding: 0.8rem 2rem;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s;
    font-weight: bold;
    text-align: center;
    text-decoration: none; /* Elimina el subrayado del enlace */
}

/* Estilo específico para el botón azul */
.button-blue {
    background-color: #1e88e5;
    color: white;
}

.button-blue:hover {
    background-color: #1565c0;
    color: white;
}

#vaciar-carrito {
    background-color: #444;
    color: white;
}

#vaciar-carrito:hover {
    background-color: #666;
}

#proceder-pago {
    background-color: #4CAF50;
    color: white;
}

#proceder-pago:hover {
    background-color: #45a049;
}

/* Mensaje de carrito vacío */
.empty-cart-message {
    text-align: center;
    padding: 3rem;
    color: #888;
    font-size: 1.2rem;
}

/* Efectos adicionales */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.item-carrito {
    animation: fadeIn 0.5s ease-out;
}


</style>
<div class="container">
    <h1>Tu Carrito de Compras</h1>
    <div id="lista-carrito">
        
    </div>
    
    <div id="total-carrito"></div>
    
    <div class="button-group">
        <button id="vaciar-carrito" class="button">Vaciar Carrito</button>
        <a href="../index.php" id="volver-principal" class="button button-blue">Volver al Catalogo</a>
        <button id="proceder-pago" class="button">Proceder al Pago</button>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const listaCarrito = document.getElementById('lista-carrito');
    const totalCarrito = document.getElementById('total-carrito');
    const vaciarBtn = document.getElementById('vaciar-carrito');
    const pagarBtn = document.getElementById('proceder-pago');
    
    // Mostrar productos del carrito
    function mostrarCarrito() {
        listaCarrito.innerHTML = '';
        
        if (carrito.length === 0) {
            listaCarrito.innerHTML = '<p>Tu carrito está vacío</p>';
            totalCarrito.textContent = '';
            return;
        }
        
        carrito.forEach(producto => {
            const item = document.createElement('div');
            item.classList.add('item-carrito');
            item.innerHTML = `
                <img src="${producto.img}" alt="${producto.nombre}">
                <div>
                    <h3>${producto.nombre}</h3>
                    <p>Precio: $${producto.precio}</p>
                    <p>Cantidad: ${producto.cantidad}</p>
                    <button class="eliminar-item" data-id="${producto.id}">Eliminar</button>
                </div>
            `;
            listaCarrito.appendChild(item);
        });
        
        // aca calcula el total
        const total = carrito.reduce((sum, producto) => sum + (producto.precio * producto.cantidad), 0);
        totalCarrito.textContent = `Total: $${total.toFixed(2)}`;
    }
    
    //Aca se vacia el carrito
    vaciarBtn.addEventListener('click', () => {
        localStorage.removeItem('carrito');
        carrito.length = 0;
        mostrarCarrito();
        actualizarContadorCarrito();
    });
    
    // Evento para eliminar del carrito
    listaCarrito.addEventListener('click', (e) => {
        if (e.target.classList.contains('eliminar-item')) {
            const id = e.target.getAttribute('data-id');
            const index = carrito.findIndex(item => item.id === id);
            
            if (index !== -1) {
                carrito.splice(index, 1);
                localStorage.setItem('carrito', JSON.stringify(carrito));
                mostrarCarrito();
                actualizarContadorCarrito();
            }
        }
    });
    
    // Evento para proceder al pago
    pagarBtn.addEventListener('click', () => {
        if (carrito.length > 0) {
            // Aquí puedes redirigir a la página de pago o procesar el pedido
            alert('Espera un momento.. realizando pago..');
        } else {
            alert('Tu carrito está vacío');
        }
    });
    
    // Mostrar carrito al cargar la página
    mostrarCarrito();
});

function actualizarContadorCarrito() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const contador = document.getElementById('contador-carrito');
    
    if (contador) {
        const totalItems = carrito.reduce((total, producto) => total + producto.cantidad, 0);
        contador.textContent = totalItems;
    }
}
</script>
    

</body>
</html>