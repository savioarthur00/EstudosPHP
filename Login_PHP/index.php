<?php  session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login via PHP</title>
    
</head>
<body>

    <?php 

    if(!isset($_SESSION['login'])){

        if(isset($_POST['acao'])){
            $login = "Savio";
            $senha = 123;

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if($login == $loginForm && $senha == $senhaForm){
                $_SESSION['login']= $login;
                header('location: home.php');

            }else{
                 echo "Dados inválidos";
            }

        }
        include('login.php');
   }else{
        if(isset($_GET['logout'])){

            unset($_SESSION['login']);
            session_destroy();
            header('location: index.php');
            session_destroy();


        }
        
   }
        
    ?>



    
</body>
</html>