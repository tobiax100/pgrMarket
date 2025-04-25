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

$conex = mysqli_connect("localhost","root","messi","marketdb"); 

if (isset($_POST['register'])) {

    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        $userName = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $fechareg = date("Y-m-d"); 


        $consulta = $conex->prepare("INSERT INTO usuarios(user_name,email,password,fecha_reg) VALUES (?, ?, ?,?)");
        $consulta->bind_param("ssss", $userName, $email,$password,$fechareg);

        if ($consulta->execute()) {
            echo '<h3 class="ok">¡Te has registrado correctamente!</h3>';
            session_start();
                $_SESSION['email'] = $email;
                header("Location: /webcompras/login/login.php");
        } else {
            echo '<h3 class="bad">¡Ups ha ocurrido un error!</h3>';

        }

    
        $consulta->close();
    } else {
        echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
    }
}
?>