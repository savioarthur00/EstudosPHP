<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confrimação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php 
    //conexão
    $pdo = new PDO('mysql:host=localhost;dbname=datanascimento', 'root','');
    $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    $dataNascimento = new DateTime($ano . "-" . $mes . "-" . $dia);
    $dataAtual = new DateTime();

    $idade = $dataAtual->diff($dataNascimento)->y;

    if ($idade >= 18) {
        $sql = $pdo->prepare("INSERT INTO datas VALUES (null,?,?,?)");
        $sql->execute(array($dia, $mes, $ano));
        echo "Inserido com sucesso!";
    } else {
        echo "Você deve ter pelo menos 18 anos para enviar o formulário";
    }
?>
