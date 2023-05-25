<!DOCTYPE html>
<html>
<head>
  <title>Exemplo de carregamento de dados com AJAX</title>
</head>
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



</body>
</html>
