<?php
    session_start();
    $_SESSION['isLogged'] = FALSE;
    session_destroy();
    header("Location: /Pratica4_Mi_Correo_Electronico/Pratica4_Mi_Correo_Electronico/public/vista/login.html");
?>