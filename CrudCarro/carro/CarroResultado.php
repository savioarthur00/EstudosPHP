<<?php 

include_once("CarroDAO.php");
@session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login']==""){
        header('location:../login.php');
        exit();        
    }
    
    
    if(isset($_POST ['placa'])){
        $sql = $pdo->prepare("INSERT INTO carros VALUES (null,?,?,?)");
        $sql -> execute(array($_POST['placa'],$_POST['modelo'],$_POST['ano'] ));
        
    } 
    
    header('location: ListarCarros.php');


?>