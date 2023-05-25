<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegar dados</title>
    <link rel="stylesheet" href="style.css">
</head>


<?php 
        //conexão
        $pdo = new PDO('mysql:host=localhost;dbname=nomes', 'root','');
        $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
?>

<body>

    <header> <h1> Nomes </h1> </header>

    <main>
        
        <?php 
             
            //Deletar
            if(true){
                    $id = (int) $_GET['delete'];
                    $pdo -> exec("DELETE * FROM nomes");
                    echo 'deletado com sucesso!';
            } 

                     
          
 
        ?>

        <br></br>


        
                
        <p>  <button onclick= "javascript:history.go(-1)"> Voltar  </button></p>
    </main>
    
</body>
</html>