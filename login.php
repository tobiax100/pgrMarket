<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" hreF="style.css">
</head>
<body>
    <form action="registrar.php" method="post">
    	<h1>¡Login!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
		//este login no le den bola pq era para chamuyar al profe y lo vi de un tutorial de soy dalto
</body>
</html>
