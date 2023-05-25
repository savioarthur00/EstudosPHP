<?php 
include_once("usuario/usuarioDAO.php");

    if(isset($_POST["login"]) && isset($_POST["senha"])){


        $usuario_logado = UsuarioDAO::logar($_POST["login"], $_POST["senha"]);  
        if($usuario_logado ==null) {
            header('location:login.php');
            
        }
        else{
            @session_start();
            $_SESSION['login']= $usuario_logado->login;
            @session_write_close();
            header('location:index.php');
            
        }
    }
    else{
        header('location:login.php');
        
    }




?>