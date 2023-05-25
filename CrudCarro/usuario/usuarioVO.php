<?php 

    class UsuarioVO{
        var $login;
        var $senha;

        function __construct($login,$senha)
        {   $this-> login = $login;
            $this-> senha = $senha;
            
        }

    }



?>