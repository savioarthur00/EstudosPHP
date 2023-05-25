<?php 

include_once("usuario/usuarioVO.php");
    class UsuarioDAO
    {

       static $usuariosCadastrados= array();

        static function logar ($login,$senha)
        {

            array_push(self::$usuariosCadastrados, new UsuarioVO("Joao","senha"));
            array_push(self::$usuariosCadastrados, new UsuarioVO("Maria","senha"));
            array_push(self::$usuariosCadastrados, new UsuarioVO("Bart","senha"));


            foreach(self::$usuariosCadastrados as $usuarioCadastrado){

                if($usuarioCadastrado->login==$login && $usuarioCadastrado->senha==$senha)
                {
                    return $usuarioCadastrado;
                }

            }
            return null;

        }

    }



?>