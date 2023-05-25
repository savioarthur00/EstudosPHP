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
        $pdo = new PDO('mysql:host=localhost;dbname=php_base', 'root','');
        $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
?>

<body>

    <header> <h1> Dados do formulário </h1> </header>

    <main>
        
        <?php 
            //Inserir no BD
            if(isset($_POST ['name'])){
                    $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?)");
                    $sql -> execute(array($_POST['name'],$_POST['email'] ));
                    echo "Inserido com sucesso!";
            } 
            //Deletar
            if(isset($_GET ['delete'])){
                    $id = (int) $_GET['delete'];
                    $pdo -> exec("DELETE FROM clientes WHERE id=$id");
                    echo 'deletado com sucesso!';
            } 

            //Atualizar 


            
            //$pdo -> exec("UPDATE clientes SET name = $name" );    
            
            
          



 
        ?>

        <br></br>


        
        <?php 
            //Buscando e opção de deletar
            $sql = $pdo ->prepare("SELECT * FROM clientes");
            $sql -> execute();

            $fetchClientes = $sql->fetchAll();

            foreach ($fetchClientes as $key => $value){
                echo '<a href="?delete='.$value['id'].'"> 🗑️ </a>' .$value['name']. ' | ' . $value['email'];
                echo '<hr>';
            }
        
        
        ?>
        
        <p>  <button onclick= "javascript:history.go(-1)"> Voltar  </button></p>
    </main>
    
</body>
</html>