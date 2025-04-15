<?php

$conexion = new mysqli('localhost', 'root', 'messi', 'marketdb');

$query = "SELECT nombre_producto, descripcion, precio, img_producto FROM productos";
$result = $conexion->query($query);


echo "<section id='encuentrate'>";
echo "<h2>Just do it</h2>";
echo "<div class='card-container'>"; 

while ($row = $result->fetch_assoc()) {
    echo "<div class='card'>"; 
    echo "<h2>" . $row['nombre_producto'] . "</h2>";
    echo "<p class='descripcion'>" . $row['descripcion'] . "</p>";
    echo "<img src='" . $row['img_producto'] . "' alt='" . $row['nombre_producto'] . "'>";
    echo "<p class='precio'>Precio: $" . $row['precio'] . "</p>";
    echo "<a href='#' class='btn-comprar'>COMPRAR AHORA</a>";
    echo "</div>";
}
echo "</div>"; 
echo "</section>";
?>