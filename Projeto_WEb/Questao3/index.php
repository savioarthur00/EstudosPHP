<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1> Insira sua data de Nascimento  </h1>
    </header>

    <section>
    <form action="formulario.php", method="post" >

         <label for="dia"> Dia </label>
         <input type="text" name="dia" id="idData">
         
         <label for="mes"> Mes </label>
         <input type="text" name="mes" id="idData">
         
         <label for="ano"> Ano </label>
         <input type="text" name="ano" id="idData">
         

         <input type="submit" value="Enviar">

    </form>

    </section>

    
</body>
</html>

