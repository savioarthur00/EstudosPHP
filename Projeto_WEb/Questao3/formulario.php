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
        $pdo = new PDO('mysql:host=localhost;dbname=datanascimento', 'root','');
        $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
?>

<body>

    <header> <h1> Data de nascimento </h1> </header>

    <main>
        
        <?php 
            //Inserir no BD
            if(isset($_POST ['dia'])){
                if($_POST['dia']==null || $_POST['mes'] == null || $_POST['ano']== null || $_POST['dia']<=0 || $_POST['mes'] <=0 || $_POST['ano']<=0 || $_POST['dia']>31 || $_POST['mes']>12 || $_POST['ano']>= 2024 ){
                    echo "Data inválida";
                }else{
                    $sql = $pdo->prepare("INSERT INTO datas VALUES (null,?,?,?)");
                    $sql -> execute(array($_POST['dia'],$_POST['mes'],$_POST['ano'] ));
                    echo "Inserido com sucesso!";
            }         
        }         
            
 
        ?>

        <br></br>

        
        
        
        <p>  <button onclick= "javascript:history.go(-1)"> Voltar  </button></p>
    </main>
    
</body>
</html>