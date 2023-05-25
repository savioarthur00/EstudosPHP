

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
        //conexão
        $pdo = new PDO('mysql:host=localhost;dbname=datanascimento', 'root','');
        $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
?>

    <header> <h1> Lista de contatos </h1></header>
        <section>      
        
            <form method= "post">
                <table>
                    <thead>
                        <tr>
                            <th>Dia</th>
                            <th>Mês</th>                            
                            <th>Ano</th>
                        </tr>
                    </thead>

                    <?php 
                       
                        $sql = $pdo ->prepare("SELECT * FROM datas");
                        $sql -> execute();

                        $fetchClientes = $sql->fetchAll();

                        foreach ($fetchClientes as $key => $value){
                            
                            ?> 
                            
                            <form>            
                                <tr>
                                    <td><?php echo $value['dia'];  ?></td>
                                    <td><?php echo $value['mes'];  ?></td>
                                    <td><?php echo $value['ano'];  ?></td>
                                    
                                </tr>             
                            <?php
                        }


                        
                    
                    
                    ?>


                </table>
            

            </form>

        </section>

    
        
    </body>
    </html>

