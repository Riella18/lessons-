<?php

/** 
 * 
 * 1 - Class MyDbConnect
 *      - connect
 *      - select
 * 
 */

function cracks($array, $label){
    $total_cracks = 0;
    for ($i = 0; $i < count($array); $i++) {
        $total_cracks += $array[$i]; 
    }
    echo $label ."cracks in 8 hours: $total_cracks\n";
}

$cracks_during_the_day = array(4, 2, 2, 1); 
cracks($cracks_during_the_day, "Total cracks completed during the first day:");

$cracks_another_day = array(1, 1, 1, 2, 1); 
cracks($cracks_another_day, "Total cracks completed on the 2nd day:");


class DB{

    private $servername = "localhost";
    private $username = "root";
    private $password = "Mirela2024@";
    private $dbname = "mirela";

    private $conn = null;

    public function __construct() {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
   
    public function getConnection(){
        return $this->conn;
    }

    public function getData(){
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $records = $stmt->fetchAll();

        print_r($records);

        foreach($records as $r){
            print_r($r['name']);
        }   
    }


}

$data = (new DB())->getData();

print_r($data);