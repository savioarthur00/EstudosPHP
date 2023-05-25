<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "telefones";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta no banco de dados
$sql = "SELECT nome, telefone FROM telefones";
$result = $conn->query($sql);

// Criação do objeto SimpleXML
$xml = new SimpleXMLElement('<telefones/>');

// Loop para adicionar os elementos "telefone"
while ($row = $result->fetch_assoc()) {
    $telefone = $xml->addChild('telefone');
    $telefone->addAttribute('nome', $row['nome']);
    $telefone->addAttribute('telefone', $row['telefone']);
}

// Saída do arquivo XML
header('Content-Type: text/xml; charset=utf-8');
echo $xml->asXML();

// Fechamento da conexão com o banco de dados
$conn->close();
?>
