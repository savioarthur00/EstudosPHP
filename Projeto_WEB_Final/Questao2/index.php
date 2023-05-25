<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nomes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM nomes";
$result = $conn->query($sql);


$xml = new SimpleXMLElement('<Nome/>');

while ($row = $result->fetch_assoc()) {
    $nomes = $xml->addChild('Nome');
    $nomes->addAttribute('id', $row['id']);
    $nomes->addAttribute('nome', $row['nome']);
    
}


header('Content-Type: text/xml; charset=utf-8');
echo $xml->asXML();


$conn->close();
?>
