<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 
        //conexão
        $pdo = new PDO('mysql:host=localhost;dbname=nomes', 'root','');
        $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
?>
<body>
	
<h1>Carregamento de dados com AJAX</h1>

<select id="opcoes"></select>
<br><br>
<button onclick="carregarDados()">Carregar dados</button>

<script>
  function carregarDados() {

var timestamp = new Date().getTime();


var xhttp = new XMLHttpRequest();
xhttp.timeout = 5000; 
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var xmlDoc = this.responseXML;
    var opcoes = xmlDoc.getElementsByTagName("nomes");
    var select = document.getElementById("opcoes");
    for (var i = 0; i < opcoes.length; i++) {
      var nome = opcoes[i].getAttribute("nome");
      var id = opcoes[i].getAttribute("id");
      var option = document.createElement("option");
      option.text = nome + " - " + id;        
      select.add(option);      

      

    }
      


  } else if (this.readyState == 4 && this.status != 200) {
    
    alert("Ocorreu um erro ao carregar os dados. Verifique o caminho para o arquivo XML.");
  }
};
xhttp.ontimeout = function() {
  alert("A solicitação AJAX excedeu o tempo limite. Verifique sua conexão com a Internet.");
};
xhttp.open("GET", "conexaobd.php?timestamp=" + timestamp, true);
xhttp.send();
}
</script>


<h3>Escolha a opção desejada</h3>
	<form id="formulario">
    <button href=adicionar.html>Enviar nome selecionado a outra base</button>
    <button href=apagardados.php>Apagar todos os dados</button>
	</form>

	<div id="resultado"></div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="formulario.js"></script>


    <section>      
        
        <h3>Lista atual</h3>

        <form method= "post">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>                            
                        
                    </tr>
                </thead>    

                <?php 
                   
                    $sql = $pdo ->prepare("SELECT * FROM nomes");
                    $sql -> execute();

                    $fetchClientes = $sql->fetchAll();

                    foreach ($fetchClientes as $key => $value){
                        
                        ?> 
                        
                        <form>            
                            <tr>
                                <td><?php echo $value['id'];  ?></td>
                                <td><?php echo $value['nome'];  ?></td>
                                
                                
                            </tr>             
                        <?php
                    }


                    
                
                
                ?>


            </table>
        

        </form>

    </section>

</body>
</html>
