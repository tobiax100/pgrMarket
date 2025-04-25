<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" hreF="loginRegister.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<div class="wrapper">

		<form action="registrar.php" method="post">

    	<h1>Registrate</h1>
		<div class="input-box">
			<input type="text" name="name" placeholder="Nombre de usuario" required><i class='bx bx-user'></i>
		</div>

    	<div class="input-box">
			<input type="email" name="email" placeholder="Email" required> <i class='bx bxl-gmail'></i>
		</div>
		
		<div class="input-box">
			<input type="password" name="password" placeholder="Ingrese su contraseña" required><i class='bx bxs-lock-alt'></i>
		</div>
		<!-- <div class="remember-forgot">
			<label><input type="checkbox">Remember me </label>
			<a href="#">Olvidaste la contraseña?</a>
		</div> -->

		<div class="register-link">
			<p>Tienes una cuenta?</p>
			<a href="/webcompras/login/login.php">Inicia sesion</a>
		</div>

    	<input class="btn" type="submit" name="register">
    </form>
	</div>
    
        <?php 
        include("registrar.php");
        ?>
		
</body>
</html>
