<?php

class database{
    public $connection;
    function __construct($configue){
        $dsn = "mysql:" . http_build_query($configue , "" , ";");
        $this->connection = new PDO($dsn , "root" ,88441536 ,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    function query($query){
        
        $statment = $this->connection->prepare($query);
        $statment->execute();
        return $statment;
    }
}