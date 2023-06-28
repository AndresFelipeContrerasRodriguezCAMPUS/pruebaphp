<?php
namespace Config;

class connection{
    private \PDO $connection;
    private array $dbs=[];
    public function addDBconfig(string $name, array $config){
    $this->dbs[$name] = $config;
}
    private function _construct(){
        $addConfig=require_once(__DIR__."/config.php");
        $addConfig($this);
        $this-> setDB($nameDB);
    }
   private function detDB ($nameDB){
    if(!isset($this -> dbs [$nameDB]))throw new Exception("Error db not found");
    self::$conmection=new \PDO (...$this-> dbs [$nameDB] +=[
        \PDO::ATTR_PERSISTENT => false,

    ]);

   }
   public function setSQL($sql){
    $this->sql=$sql;
   }
   public function execute(?array $datos){
    $stmt =$this->connection->prepare($this->sql);
   }

    
}
?>