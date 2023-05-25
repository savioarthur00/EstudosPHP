<?php 

@session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login']==""){
        header('location:login.php');
        exit();        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header> <h1> Escolha a opção  </h1></header>
    <section>
       
        <form  method= "post">
        <li><a href="carro/inserirCarro.php"> Cadastrar Carro</a></li>
        <li><a href="carro/ListarCarros.php">Listar carros</a></li>
        <li><a href="logout.php"> Sair</a></li>

        </form>

    </section>

  
    
</body>
</html>

