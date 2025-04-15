<?php
include("con_db.php");

if (isset($_POST['register'])) {

    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fechareg = date("Y-m-d"); 


        $consulta = $conex->prepare("INSERT INTO clientes(nombre, email, fecha_reg) VALUES (?, ?, ?)");
        $consulta->bind_param("sss", $name, $email, $fechareg);

        if ($consulta->execute()) {
            echo '<h3 class="ok">¡Te has inscripto correctamente!</h3>';
        } else {
            echo '<h3 class="bad">¡Ups ha ocurrido un error!</h3>';

        }

    
        $consulta->close();
    } else {
        echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
    }
}
?>