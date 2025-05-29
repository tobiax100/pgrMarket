document.addEventListener('DOMContentLoaded', function() {

    const botonesAgregar = document.querySelectorAll('.agregar-carrito');
    
 
    botonesAgregar.forEach(boton => {
        boton.addEventListener('click', agregarAlCarrito);
    });
});

function agregarAlCarrito(e) {
    e.preventDefault();
    
    // Obtenerdatos del product
    const id = e.target.getAttribute('data-id');
    const nombre = e.target.getAttribute('data-nombre');
    const precio = e.target.getAttribute('data-precio');
    const img = e.target.getAttribute('data-img');
    
   
    const producto = {
        id: id,
        nombre: nombre,
        precio: precio,
        img: img,
        cantidad: 1
    };
    
   
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    
    //verifica si el producto exite 
    const productoExistente = carrito.find(item => item.id === id);
    
    if (productoExistente) {
        
        productoExistente.cantidad++;
    } else {
        // Si no existe, agregar al carrito
        carrito.push(producto);
    }
    
    //guardar en local storage
    localStorage.setItem('carrito', JSON.stringify(carrito));
    

    mostrarNotificacion(`agregado correctamente al carrito`);
    
 
    actualizarContadorCarrito();
}

function mostrarNotificacion(mensaje) {

    const notificacion = document.createElement('div');
    notificacion.classList.add('notificacion-carrito');
    notificacion.textContent = mensaje;
    
    // Agregar al body
    document.body.appendChild(notificacion);
    

    setTimeout(() => {
        notificacion.remove();
    }, 3000);
}

function actualizarContadorCarrito() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const contador = document.getElementById('contador-carrito');
    
    if (contador) {
        const totalItems = carrito.reduce((total, producto) => total + producto.cantidad, 0);
        contador.textContent = totalItems;
    }
}

actualizarContadorCarrito();