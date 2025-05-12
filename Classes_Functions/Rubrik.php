<?php 

class Rubrik {
    private $rID;
    private $rName;
    private $rBeschreibung;

    function __construct($rID, $rName, $rBeschreibung) {
        $this->rID = $rID;
        $this->rName = $rName;
        $this->rBeschreibung = $rBeschreibung;
    }

    function writeLink() {
        echo "<li><a class='dropdown-item' href='./index.php?rubrik={$this->rID}'>{$this->rName}</a></li>";
    }
}