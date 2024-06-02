<?php
// Database configuration
class Database{
protected $conn;


private $host = 'localhost';
        private $db_name = 'pc_club';
        private $user_name = 'root';
        private $password = '';

// Create connection
public function createconnection(){
    try {
        //$pdo = new PDO('mysql:host=localhost;dbname=vaša_databáza', 'vaše_používateľské_meno', 'vaše_heslo');
        $connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . 
                              ";charset=utf8", 
                              $this->user_name, 
                              $this->password);
                              
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $connection;
        
    }catch(PDOException $e){
        die("Chyba pripojenia k databáze: " . $e->getMessage());
    }



}

}
?>
