<?php
// 1. Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "telefones";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if (!$conn) {
  die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// 2. Executar a consulta SQL
$sql = "SELECT nome, telefone FROM telefones";
$result = mysqli_query($conn, $sql);

// 3. Iterar sobre os resultados e adicionar ao XML
$xml = new SimpleXMLElement('<telefones/>');
while ($row = mysqli_fetch_assoc($result)) {
  $telefone = $xml->addChild('telefone');
  $telefone->addAttribute('nome', $row['nome']);
  $telefone->addAttribute('telefone', $row['telefone']);
}

// 4. Imprimir o XML resultante
Header('Content-type: text/xml; charset=utf-8');
echo $xml->asXML();
?>
