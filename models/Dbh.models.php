<?php

 class Dbh {
 
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpwd = '';
    private $dbname = 'blogs';
    private $db;


    public function connectDb() {
         $this->db = null;
        $this->db = new PDO ('mysql:host=' .$this->dbhost. ';dbname='.$this->dbname, $this->dbuser, $this->dbpwd);

        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     return $this->db;


}

}

