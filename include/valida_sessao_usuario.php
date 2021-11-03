<?php
    session_start();
    if (empty($_SESSION['id_usuario']) || empty($_SESSION['email_usuario']) || empty($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario']!='comum'){
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }
?>