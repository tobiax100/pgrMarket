<?php 

$conexion = new mysqli('localhost','root','messi','marketdb');
$id_categoria = 1;
$query = $conexion->prepare("SELECT nombre_producto,productos.descripcion,precio, img_producto
                             FROM productos 
                             INNER JOIN categorias 
                             ON productos.id_categoria = categorias.id_categoria 
                             WHERE categorias.id_categoria = ?");
$query->bind_param("i", $id_categoria);
$query->execute();

$result=$query->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<div class='card'>"; 
    echo "<h2>" . $row['nombre_producto'] . "</h2>";
    echo "<p class='descripcion'>" . $row['descripcion'] . "</p>";
    echo "<img src='" . $row['img_producto'] . "' alt='" . $row['nombre_producto'] . "'>";
    echo "<p class='precio'>Precio: $" . $row['precio'] . "</p>";
    echo "<a href='#' class='comprar-btn'>COMPRAR AHORA</a>"."<br>";
    echo "<a href='#' class='btn-comprar agregar-carrito'>Agregar al Carrito</a>";
    echo "</div>";
}

$query->close();
$conexion->close();
?>