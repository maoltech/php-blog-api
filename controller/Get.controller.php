<?php
include_once '../models/Dbh.models.php';
include_once '../views/getapi.views.php';

class Get extends Dbh{

//private $table = 'blog';
public $id;
public $title;
public $author;
public $body;


public function read(){

    $sql ='SELECT id, title, author, body FROM blog';

    $stmt = $this->connectDb()->prepare($sql);

    $stmt->execute();

   // $result = $stmt->fetchall();

    return $stmt;

}



}