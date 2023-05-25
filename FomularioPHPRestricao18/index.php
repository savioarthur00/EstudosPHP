<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>

<?php 
    //conexão
    $pdo = new PDO('mysql:host=localhost;dbname=datanascimento', 'root','');
    $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    if(isset($_POST['dia']) && isset($_POST['mes']) && isset($_POST['ano'])){
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        if($dia==null || $mes == null || $ano== null || $dia<=0 || $mes <=0 || $ano<=0 || $dia>31 || $mes>12 || $ano>= 2024 ){
            echo("Data inválida");
        } else {
            $dataNascimento = new DateTime($ano . "-" . $mes . "-" . $dia);
            $dataAtual = new DateTime();

            $idade = $dataAtual->diff($dataNascimento)->y;

            if ($idade >= 18) {
                $sql = $pdo->prepare("INSERT INTO datas VALUES (null,?,?,?)");
                $sql -> execute(array($dia,$mes,$ano));
                echo "Inserido com sucesso!";
            } else {
                echo "Você deve ter pelo menos 18 anos para enviar o formulário";
            }
        }
    }
?>

<body>

	<form method="POST" action="">
		<label for="dia">Dia:</label>
		<input type="number" id="dia" name="dia" required>
		<br>
		<label for="mes">Mês:</label>
		<input type="number" id="mes" name="mes" required>
		<br>
		<label for="ano">Ano:</label>
		<input type="number" id="ano" name="ano" required>
		<br>
		<button type="submit">Enviar</button>
	</form>

	
</body>
</html>
