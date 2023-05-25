<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header> <h1> Resultado do processamento </h1> </header>

    <main>
        <?php 
    
            $n = $_GET ["nome"] ?? "Sem nome";
            $s = $_GET["sobrenome"] ?? "Sem sobrenome";
            echo "<p> É um prazer te conhecer, <strong>  $n $s </strong> ! Este é meu site!"; 
 
        ?>

        <p> <a href="javascript:history.go(-1)"> Voltar para a página anterior </a></p>
    </main>
    
</body>
</html>