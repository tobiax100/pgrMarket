<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>
<style>
h1{
display: block;
  text-align: center;
  font-size: 2em;
  margin-top: 0.67em;
  margin-bottom: 0.67em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}


input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number],select{
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
<body>
    <h1>Ingrese productos a la Base de datos</h1>
   <div>
        <form method="post" action="sendProductos.php">
                <input type="text" name="name" placeholder="Ingrese nombre del Producto">
                <input type="text" name="descripcion" placeholder="Descripcion del producto">
                <input type="text" name="imagen" placeholder="ingrese url img">
                <input type="number" name="precio" placeholder="Precio del producto">
                <input type="number" name="cantidad" placeholder="Stock del producto">
                <input type="number" name="id" placeholder="id de la categoria">
                <input type="submit" name="enviar" value="Enviar Producto">
        </form>
   </div> 
    
</body>
</html>
