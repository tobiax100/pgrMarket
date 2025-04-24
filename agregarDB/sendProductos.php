<style>
  .ok {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}
</style>

<?php 

$conex = new mysqli('localhost','root','messi','marketdb');


if (isset($_POST['enviar'])) {
  if (!empty($_POST['name']) && !empty($_POST['descripcion']) && !empty($_POST['imagen']) && !empty($_POST['precio'])  && !empty($_POST['cantidad'])) {
    $name = htmlspecialchars($_POST['name']);
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $img = htmlspecialchars($_POST['imagen']);
    $precio = filter_var($_POST['precio'], FILTER_VALIDATE_INT);
    $stock = filter_var($_POST['cantidad'], FILTER_VALIDATE_INT);


      $consulta = $conex->prepare("INSERT INTO productos(nombre_producto,descripcion,img_producto,precio,stock) VALUES(?,?,?,?,?)");
      $consulta->bind_param("sssii",$name,$descripcion,$img,$precio,$stock);

      if($consulta->execute()){
        echo '<h3 class="ok">¡Producto enviado a la base de datos!</h3>';
      }else{
        echo '<h3 class="bad">Error el enviar el producto a la base de datos!</h3>';
      }

      $consulta->close();
  }else{
    echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
  }


}

?>