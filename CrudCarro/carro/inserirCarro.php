<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <header> <h1> Cadastrar Carro </h1></header>
    
    <section>
    
    
    <form  method= "post" action="CarroResultado.php">
     <label for="placa"> Placa </label>
     <input type="text" name="placa" id="idplaca" /><br/>
     <label for="modelo">Modelo </label>
     <input type="text" name="modelo" id="idmodelo"><br/>
     <label for="ano">Ano </label>
     <input type="text" name="ano" id="idano"/><br/>
     <input type="submit" value="Enviar">
     </form>           

    </section>

    
</body>
</html>


