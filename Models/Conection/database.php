<? 

//Creando la clase para conectar a la base de datos

class Database { 

    private static $server = 'localhost;port=3306';

    private static $dbName = 'integra';
    private static $dbUser = 'root';
    private static $dbPass = ''; 

    public static function Connect()
    {
        try{
            $connection = new PDO('mysql:host='.self::$server.';dbname='.self::$dbName.';charset=utf8',self::$dbUser,self::$dbPass);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $connection;
        }catch(PDOException $e){
            return "Error: ".$e->getMessage();

        }
    }

}