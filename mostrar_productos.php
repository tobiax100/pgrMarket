<?php
//aca se llama a la base de datos y devulve los productos 
//local host (servidor), root (es el usuario), messi(es la contraseña de mi base de datos, si la tuya es otra pone esa, si no tenes dejalo vacio),(market db es el nombre de mi base de datos, la tuya es otra entonces tenes q cambiarla)
$conexion = new mysqli('localhost', 'root', 'messi', 'marketdb');

//se selecciona los atributos de la base de datos de la tabla productos
$query = "SELECT nombre_producto, descripcion, precio, img_producto FROM productos";
$result = $conexion->query($query);


echo "<section id='encuentrate'>";
echo "<h2>Just do it</h2>";
echo "<div class='card-container'>"; 
//Echo con el resultado de los productos de la base de datos
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