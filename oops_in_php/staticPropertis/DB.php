<?php
declare(strict_types=1);
namespace oops_in_php\staticPropertis;
class DB{
    public static ?DB $instance =null;
    private function __construct(public array $config){//dekho constructor private hai to simple si baat
        // hai ki esi class me ek function banana hoga jo insance ko retuern karega 
        //jisse ki koi dushri file se db ko accse nahi kar payega
        echo "Instance Created!";
    }
    public static function getInstance(array $config):DB{
        if(self::$instance===null){ //Agar instance pehli baar create ho rahi hai, tabhi nayi
            // instance banegi, warna existing instance return hogi.
            self::$instance= new DB($config);
        }
        return self::$instance;
    }
}



//---------------FOR DB CONNECTION--------------------------------
// USING Singleton Design Pattern
/*

declare(strict_types=1);
namespace oops_in_php\staticProperties;

class DB {
    public static ?DB $instance = null;
    public \PDO $connection;

    private function __construct(public array $config) {
        // PDO connection create karte waqt config use karenge
        $dsn = "mysql:host=" . $this->config['host'] . ";dbname=" . $this->config['dbname'];
        $this->connection = new \PDO($dsn, $this->config['user'], $this->config['password']);
        echo "Database connection established!";
    }

    public static function getInstance(array $config): DB {
        if (self::$instance === null) {
            self::$instance = new DB($config);
        }
        return self::$instance;
    }
}
    */
    
