<?php 
include "./Classes_Functions/Rubrik.php";

class DatabaseConnection {
    // Properties
    private $myPDO;

    private $servername;
    private $username;
    private $password;

    // Constructor
    function __construct($server, $user, $pass) {
        $this->myPDO = new PDO("mysql:host=$server;dbname=bfw_kleinanzeigen", $user, $pass);
        $this->servername = $server;
        $this->username = $user;
        $this->password = $pass;
    }

    // Methods
    function get_connectingDB($connectingDB) {
        return $this->connectingDB;
    }

    function get_rubriken() {
        $rubrikArr = [];
        try {
            $this->myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->myPDO->prepare("SELECT * FROM rubrik");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            foreach($stmt->fetchAll() AS $rubrik) {
                $rubrikArr[] = new Rubrik($rubrik["rID"], $rubrik["rname"], $rubrik["rbeschreibung"]);
            }
            } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            }  
        return $rubrikArr;  
    }
}