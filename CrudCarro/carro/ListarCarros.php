<?php 

@session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login']==""){
        header('location:../login.php');
        exit();        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de carros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header> <h1> Lista de Carros  </h1></header>
        <section>      
        
            <form method= "post">
                <table>
                    <thead>
                        <tr>
                            <th>Placa</th>
                            <th>Modelo</th>
                            <th>Ano</th>
                            <th></th>
                        </tr>
                    </thead>

                    <?php 
                        include_once("CarroDAO.php");
                        $sql = $pdo ->prepare("SELECT * FROM carros");
                        $sql -> execute();

                        $fetchClientes = $sql->fetchAll();

                        foreach ($fetchClientes as $key => $value){
                            
                            ?> 
                            
                            <form>            
                                <tr>
                                    <td><?php echo $value['placa'];  ?></td>
                                    <td><?php echo $value['modelo'];  ?></td>
                                    <td><?php echo $value['ano'];  ?></td>
                                    <td><a href="adicionar_editar_carro.php?placa=$value['placa']>">Editar</a></td>
                                </tr>             
                            <?php
                        }


                        
                    
                    
                    ?>


                </table>
            

            </form>

        </section>

    
        
    </body>
    </html>

