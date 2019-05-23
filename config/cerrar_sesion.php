<?php
    session_start();
    $_SESSION['isLogged'] = FALSE;
    session_destroy();
    header("Location: /Practica04-web/Practica04-Mi_Correo_Electronico/public/vista/login.html");
?>