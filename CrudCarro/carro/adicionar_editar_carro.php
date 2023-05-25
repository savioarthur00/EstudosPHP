
<?php 




@session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login']==""){
        header('location:login.php');
        exit();        
    }
    include_once("CarroDAO.php");
    if(isset($_GET["placa"])){
        $carro=CarroDAO::buscar($_GET["placa"]);
        

    }else{
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar/ Editar Carro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header> <h1> Editar Carro  </h1></header>
    <section>

    
    

    <?php                   
                        include_once("CarroDAO.php");
                        $search = "";
                        $sql = $pdo ->prepare("SELECT * FROM carros WHERE placa LIKE '%" . $search . "%'"); 
                        $sql -> execute();
                                        
                        $fetchCarros = $sql->fetchAll();
                        foreach ($fetchCarros as $key => $value){   
                                                
                            ?>                             
                            <form  method= "post" action="CarroResultado.php">
                            <label for="placa"> Placa </label>
                            <input type="text" name="placa" id="idplaca" value="<?php echo $value['placa'] ?>"/><br/>
                            <label for="modelo">Modelo </label>
                            <input type="text" name="modelo" id="idmodelo"
                            value="<?php echo $value['modelo'] ?>"/><br/>
                            <label for="ano">Ano </label>
                            <input type="text" name="ano" id="idano"value="<?php echo $value['ano'] ?>"/><br/>
                            <input type="submit" value="Enviar">

                            </form>            
                            <?php
                        }
                    


                        
                    
                    
                    ?>


    
    
        

    </section>


  
    
</body>
</html>

