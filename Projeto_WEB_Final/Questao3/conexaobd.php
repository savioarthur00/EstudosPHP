<?php
// 1. Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nomes";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if (!$conn) {
  die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}


$sql = "SELECT * FROM nomes";
$result = mysqli_query($conn, $sql);

$xml = new SimpleXMLElement('<Nomes/>');
while ($row = mysqli_fetch_assoc($result)) {
  $telefone = $xml->addChild('nomes');
  $telefone->addAttribute('nome', $row['nome']);
  $telefone->addAttribute('id', $row['id']);
}

// 4. Imprimir o XML resultante
Header('Content-type: text/xml; charset=utf-8');
echo $xml->asXML();
?>
