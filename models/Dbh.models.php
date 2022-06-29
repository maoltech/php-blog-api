<?php

 class Dbh {
 
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpwd = '';
    private $dbname = 'blogs';


    public function connectDb() {

        $db = new PDO ('mysql:host=' .$this->dbhost. ';dbname='.$this->dbname, $this->dbuser, $this->dbpwd);

        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     return $db;

     if($db){
        echo 'succes';
    }else{
    
       echo 'error'; 
    }

}

}

