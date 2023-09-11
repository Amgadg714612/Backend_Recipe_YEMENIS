<?php
// code php connection database mysql
class database{
    private  $host="localhost";
    private $db_name="Recipe";
    private $username="root";
    private $passdb="";
    public $con;
    public function getconection(){
        $this->con=null;
        try{
   $this->con=new PDO("mysql:host=" . $this->host . ";dbname=".$this->db_name,$this->username,$this->passdb);
   $this->con->exec("set names utf8mb4");
        }catch( PDOException $ex){
            echo "conect errer". $ex->getMessage();

        }
    }
}

?>