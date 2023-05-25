

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
        //conexão
        $pdo = new PDO('mysql:host=localhost;dbname=nomes', 'root','');
        $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
?>

    <header> <h1> Lista de contatos </h1></header>
        <section>      
        
            <form method= "post">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>                            
                            
                        </tr>
                    </thead>

                    <?php 
                       
                        $sql = $pdo ->prepare("SELECT * FROM nomes");
                        $sql -> execute();

                        $fetchClientes = $sql->fetchAll();

                        foreach ($fetchClientes as $key => $value){
                            
                            ?> 
                            
                            <form>            
                                <tr>
                                    <td><?php echo $value['id'];  ?></td>
                                    <td><?php echo $value['nome'];  ?></td>
                                    
                                    
                                </tr>             
                            <?php
                        }


                        
                    
                    
                    ?>


                </table>
            

            </form>

        </section>

    
        
    </body>
    </html>

