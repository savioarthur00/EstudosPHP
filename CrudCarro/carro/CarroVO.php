<?php 

    class CarroVO{
        var $id;
        var $placa;
        var $modelo;
        var $ano;

        function __construct2($placa,$modelo,$ano)
        {   
            $this-> placa = $placa;
            $this-> modelo = $modelo;
            $this-> ano = $ano;
            
        }

        function __construct($id,$placa,$modelo,$ano)
        {   $this-> id = $id;
            $this-> placa = $placa;
            $this-> modelo = $modelo;
            $this-> ano = $ano;
            
        }

    }





?>