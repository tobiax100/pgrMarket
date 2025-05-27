<?php

$conexion = new mysqli('localhost', 'root', 'messi', 'marketdb');

$query = "SELECT id_producto,nombre_producto, precio, img_producto FROM productos";
$result = $conexion->query($query);


echo '<section id="carrusel">';
echo '<div class="carrusel-container">';
echo '<button id="prevBtn">&#10094;</button>';
echo '<div class="carrusel-items">';

while ($row = $result->fetch_assoc()) {
    echo "<div class='card' data-id='" . $row['id_producto'] . "'>"; 
    echo "<h2>" . $row['nombre_producto'] . "</h2>";
    echo "<img class='carrusel-img' src='" . $row['img_producto'] . "' alt='" . $row['nombre_producto'] . "'>";
    echo "<p class='precio'>Precio: $" . $row['precio'] . "</p>";
    echo "<a href='#' class='comprar-btn'>COMPRAR AHORA</a>"."<br>";
    echo "<br> <a href='#' class='btn-comprar agregar-carrito' 
          data-id='" . $row['id_producto'] . "'
          data-nombre='" . htmlspecialchars($row['nombre_producto']) . "'
          data-precio='" . $row['precio'] . "'
          data-img='" . $row['img_producto'] . "'>Agregar al Carrito</a>";
    echo "</div>";
}
echo '</div>'; 
echo '<button id="nextBtn">&#10095;</button>'; 
echo '</div>'; 
echo '</section>';
echo "</div>"; 



?>