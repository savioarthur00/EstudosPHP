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

    <header> <h1> Cadastro </h1> </header>

    <main>
        
        <?php 
            //Inserir no BD
            if(isset($_POST ['nome'])){
                if($_POST['nome']==null){
                    echo "Preencha os dados";
                }else{
                    $sql = $pdo->prepare("INSERT INTO nomes VALUES (null,?)");
                    $sql -> execute(array($_POST['nome']));
                    echo "Inserido com sucesso!";
            }         
        }         
            
 
        ?>

        <br></br>

        
        
        
        <p>  <button onclick= "javascript:history.go(-1)"> Voltar  </button></p>
    </main>
    
</body>
</html>