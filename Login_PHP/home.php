<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
    echo '<h2> Bem vindoo '. $_SESSION['login'].'</h2>';
    echo '<a href= "?logout"> SAIR </a>';
    ?>
    
    

   
    
</body>
</html>