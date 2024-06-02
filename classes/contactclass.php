<?php
require_once ("dbconnection.php");
class Contact extends Database {
    private $db;
    public function __construct(){
        $this->db=$this->createconnection();
        
    }
    function saveContactData($name, $email, $message, $consent) {
        
        $stmt = $this->db->prepare("INSERT INTO contactus (name, email, message, checkbox) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $message, $consent);
        $stmt->execute();
        $stmt->close();
    }
}