document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todos los botones de agregar al carrito
    const botonesAgregar = document.querySelectorAll('.agregar-carrito');
    
    // Agregar evento click a cada botón
    botonesAgregar.forEach(boton => {
        boton.addEventListener('click', agregarAlCarrito);
    });
});

function agregarAlCarrito(e) {
    e.preventDefault();
    
    // Obtener datos del producto
    const id = e.target.getAttribute('data-id');
    const nombre = e.target.getAttribute('data-nombre');
    const precio = e.target.getAttribute('data-precio');
    const img = e.target.getAttribute('data-img');
    
    // Crear objeto del producto
    const producto = {
        id: id,
        nombre: nombre,
        precio: precio,
        img: img,
        cantidad: 1
    };
    
    // Obtener carrito actual del localStorage o crear uno nuevo
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    
    // Verificar si el producto ya está en el carrito
    const productoExistente = carrito.find(item => item.id === id);
    
    if (productoExistente) {
        // Si existe, aumentar la cantidad
        productoExistente.cantidad++;
    } else {
        // Si no existe, agregar al carrito
        carrito.push(producto);
    }
    
    // Guardar carrito en localStorage
    localStorage.setItem('carrito', JSON.stringify(carrito));
    
    // Mostrar notificación
    mostrarNotificacion(`agregado correctamente al carrito`);
    
    // Actualizar contador del carrito (si lo tienes)
    actualizarContadorCarrito();
}

function mostrarNotificacion(mensaje) {
    // Crear elemento de notificación
    const notificacion = document.createElement('div');
    notificacion.classList.add('notificacion-carrito');
    notificacion.textContent = mensaje;
    
    // Agregar al body
    document.body.appendChild(notificacion);
    
    // Eliminar después de 3 segundos
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

// Inicializar contador al cargar la página
actualizarContadorCarrito();