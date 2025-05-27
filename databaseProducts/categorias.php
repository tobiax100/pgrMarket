<?php 

$conexion = new mysqli('localhost','root','messi','marketdb');
$id_categoria = 1;
$query = $conexion->prepare("SELECT id_producto,nombre_producto,productos.descripcion,precio, img_producto
                             FROM productos 
                             INNER JOIN categorias 
                             ON productos.id_categoria = categorias.id_categoria 
                             WHERE categorias.id_categoria = ?");
$query->bind_param("i", $id_categoria);
$query->execute();

$result=$query->get_result();

echo '<section id="carrusel">';
echo '<div class="carrusel-container">';

echo '<button id="prevBtn">&#10094;</button>';
echo '<div class="carrusel-items">';

while ($row = $result->fetch_assoc()) {
   
    echo "<div class='card'>"; 
    echo "<h2>" . $row['nombre_producto'] . "</h2>";
    echo "<p class='descripcion'>" . $row['descripcion'] . "</p>";
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


$query->close();
$conexion->close();
?>