<?php 
include "./Classes_Functions/Rubrik.php";

class Database {
    // Properties
    private $myPDO;

    private $servername;
    private $username;
    private $password;

    // Constructor
    public function __construct($server, $user, $pass) {
        $this->myPDO = new PDO("mysql:host=$server;dbname=bfw_kleinanzeigen", $user, $pass);
        $this->servername = $server;
        $this->username = $user;
        $this->password = $pass;
    }

    // Methods
    public function get_rubriken() {
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

    public function get_user($email, $PW) {

        $this->myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $this->myPDO->prepare("SELECT * FROM user WHERE uemail = ? AND uPW = ?");
        $stmt->execute([$email, $PW]);

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetch();

        return $user;
    }

    public function register_user($username, $PW, $email) {
        $this->myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $this->myPDO->prepare("INSERT INTO user (username, uPW, uemail) VALUES (?, ?, ?);");
        $stmt->execute([$username, $PW, $email]);

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
        
}