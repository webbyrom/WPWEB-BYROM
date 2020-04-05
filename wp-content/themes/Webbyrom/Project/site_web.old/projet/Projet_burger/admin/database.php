<?php

class Database
{
    private static $dbHost = "localhost:3308";  //private appartient a  laclasse Database il n'y a que la classe database qui y accede
    private static $dbName = "burger_code";
    private static $dbUsername = "root";
    private static $dbUserpassword = "123";
    
    private static $connection = null;
    
    public static function connect()            //public pour être appele pour d'autre et static = appartient  a la classe et non a l'instance ( besoin de precision pas tres clair).
    {
        if(self::$connection == null)//self propriete statique de la classe.
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;//:: pour acceder a une fonction statique de la classe.
    }

}
?>
