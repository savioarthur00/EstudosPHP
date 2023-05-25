
<?php 
        //conexão
        static $pdo = new PDO('mysql:host=localhost;dbname=carrosbd', 'root','');
        $pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
?>

<?php 



include_once("CarroVO.php");
    class CarroDAO
    {   
        
        
        
       static $carros= array();

       static function listar2 ($pdo){
        $sql = $pdo ->prepare("SELECT * FROM carros");
            $sql -> execute();

            $fetchClientes = $sql->fetchAll();

            foreach ($fetchClientes as $key => $value){
                echo '<a href="?delete='.$value['id'].'"> 🗑️ </a>' .$value['placa']. ' | ' . $value['modelo'] . ' | ' . $value['ano'];
                echo '<hr>';
            }
        
       }

        
        static function buscar ($placa)
        {
            //array_push(self::$carros, new CarroVO("ABCD123","Sedan","2010"));
            //array_push(self::$carros, new CarroVO("EFGH","Conversivel","2020"));  
            
            foreach(self::$carros as $carro){

                if($carro->placa==$placa) {
                    return $carro;
                }

            }
            return null;

        }

        static function inserir($carroVO){

        }

    }



?>