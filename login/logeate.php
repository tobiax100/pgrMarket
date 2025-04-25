<?php

$conex = new mysqli('localhost', 'root', 'messi', 'marketdb');

if (isset($_POST['user_name'])) {
    $user_name =trim($_POST['user_name']);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    $query = $conex->prepare("SELECT user_name,password FROM usuarios WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        
        if (password_verify($password, $row['password'])) {
            echo '<h3 class="ok">¡Iniciaste sesión correctamente!</h3>';
            session_start(); 
            $_SESSION['email'] = $email; 
            $_SESSION['user_name']= $row['user_name'];
            header("Location: /webcompras/index.php"); // una vez que se verifico la contraseña y mail te manda a la pag princ
            exit(); 
        } else {
            echo '<h3 class="bad">Contraseña equivocada.</h3>';
        }
    } else {
        echo '<h3 class="bad">Usuario no encontrado.</h3>';
    }

    $query->close();
}

$conex->close();
?>