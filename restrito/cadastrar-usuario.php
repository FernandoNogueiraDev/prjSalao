<?php
    require_once('../model/Usuario.php');

    header("Location: form-usuario.php?msg=1");

    $usuario = new Usuario();

    $usuario->setNomeUsuario($_POST['txtnome']);
    $usuario->setLoginUsuario($_POST['txtlogin']);
    $usuario->setSenhaUsuario($_POST['txtsenha']);


    $usuario->cadastrar($usuario);

        
?>